<?php

namespace Visiosoft\ProjectManagementModule\Project\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ProjectFormHandler
{
    public function handle(ProjectFormBuilder $builder)
    {
//        $builder->saveForm();
//        $input = request()->all();
//        $csvFile = $input["excel_file"];
//
//
//
//        $csvArray = [];
//        if (($handle = fopen($csvFile, 'r')) !== FALSE) {
//            // Satır satır oku
//            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//                // Her satırı array'e ekle
//                $csvArray[] = $data;
//            }
//            // Dosyayı kapat
//            fclose($handle);
//        }
//
//        // Array'i kontrol etmek için yazdır
//
//        $columns = explode(";", $csvArray[2][0]);
//        dd(array_values($columns));


        //        $data = collect([['name'=>'asd1','age'=>'asd22'],['name'=>'asd1','age'=>'asd24'],['name'=>'asd1','age'=>'asd22']]);


        $input = request()->all();
        $excelFile = $input["excel_file"];

        $spreadsheet = IOFactory::load($excelFile);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        // Verileri yazdırma
        foreach ($sheetData as $row) {
            print_r($row);
        }
    }
}