<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Ui\Icon\Icon;
use Visiosoft\ProjectManagementModule\Project\Form\ProjectFormBuilder;
use Visiosoft\ProjectManagementModule\Project\Table\ProjectTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Visiosoft\ProjectManagementModule\Part\PartModel;
use Visiosoft\ProjectManagementModule\PartsMainImage\PartsMainImageModel;
use Visiosoft\ProjectManagementModule\PartsSubImage\PartsSubImageModel;
use Illuminate\Support\Facades\Log;

class ProjectsController extends AdminController
{
    /**
     * Display an index of existing entries.
     *
     * @param ProjectTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ProjectTableBuilder $table)
    {
        Log::info('Index method triggered');
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ProjectFormBuilder $form
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ProjectFormBuilder $form, Request $request)
    {
        Log::info('Create method triggered');

        if ($request->isMethod('post')) {
            Log::info('POST request received');

            $form->make(); // Proje veritabanına kaydedilecek
            $project = $form->getFormEntry(); // Yeni oluşturulan proje entry'sini alır
            $projectId = $project->id; // Proje ID'si

            Log::info('Created Project ID:', [$projectId]);

            // Excel dosyasının yolunu formdan al
            $excelFilePath = $request->input('excel_file');
            Log::info('Excel File Path:', [$excelFilePath]);

            if ($excelFilePath) {
                Log::info('Excel file path:', [$excelFilePath]);

                // Excel dosyasını işleme
                $this->handleExcelUpload($projectId, $excelFilePath);
            } else {
                Log::info('No Excel file path provided');
            }
        }

        return $form->render();
    }



    /**
     * Edit an existing entry.
     *
     * @param ProjectFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ProjectFormBuilder $form, $id)
    {
        Log::info('Edit method triggered with ID: ' . $id);
        return $form->render($id);
    }

    /**
     * Excel dosyasını işleyip veritabanına parçalar ve resimler kaydeden fonksiyon.
     *
     * @param $projectId
     * @param $excelFilePath
     */
    private function handleExcelUpload($projectId, $excelFilePath)
    {
        Log::info('Handle Excel Upload method triggered');
        Log::info('Project ID:', [$projectId]);
        Log::info('Excel file path:', [$excelFilePath]);

        try {
            $spreadsheet = IOFactory::load($excelFilePath);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            Log::info('Sheet Data:', [$sheetData]);

            foreach ($sheetData as $index => $row) {
                Log::info('Processing row:', [$row]);

                if ($index !== 0) {
                    // 1. Ana Parça Tanımını (Part) veritabanında ara, yoksa oluştur
                    $part = PartModel::where('part_name', $row[3])->first();

                    if (!$part) {
                        $part = PartModel::create([
                            'part_name' => $row[3], // Ana Parça Tanımı
                            'project' => $projectId,  // Proje ile ilişkilendir (relationship)
                        ]);
                        Log::info('Part created:', [$part]);
                    } else {
                        Log::info('Part already exists:', [$part]);
                    }

                    // 2. Ana Resmi (MainImage) veritabanında ara, yoksa oluştur
                    $mainImage = PartsMainImageModel::where('PartMainImageNumber', $row[2])
                        ->where('part', $part->id) // part_id yerine part ile ilişkilendirme yapılacak
                        ->first();

                    if (!$mainImage) {
                        $mainImage = PartsMainImageModel::create([
                            'PartMainImageNumber' => $row[2], // Ana Resim
                            'part' => $part->id, // part ile ilişkilendir (relationship)
                        ]);
                        Log::info('Main image created:', [$mainImage]);
                    } else {
                        Log::info('Main image already exists:', [$mainImage]);
                    }

                    // 3. Alt Resim ve Miktarı (SubImage) oluştur ve Ana Resim ile ilişkilendir
                    PartsSubImageModel::create([
                        'PartSubImageNumber' => $row[0], // Alt Resim
                        'quantity' => $row[1], // Miktar
                        'ProjectMainPart' => $mainImage->id, // Ana Resim ile ilişkilendir (relationship)
                    ]);
                    Log::info('Sub image created for main image:', [$mainImage->id]);
                }
            }
        } catch (\Exception $e) {
            Log::error('Error processing Excel file: ' . $e->getMessage());
        }
    }



}
