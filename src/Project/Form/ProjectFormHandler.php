<?php

namespace Visiosoft\ProjectManagementModule\Project\Form;

use PhpOffice\PhpSpreadsheet\IOFactory as ExcelIOFactory;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

//class ProjectFormHandler
//{
//    public function handle(ProjectFormBuilder $builder)
//    {
//
////        $input = request()->all();
////        $excelFile = $input["excel_file"];
////
////        // Excel dosyasını yüklemek için IOFactory kullanımı
////        $spreadsheet = ExcelIOFactory::load($excelFile);
////        $sheetData = $spreadsheet->getActiveSheet()->toArray();
////
////        // Verileri yazdırma
////        foreach ($sheetData as $row) {
////            print_r($row);
////        }
////
////        dd($row);
//
//            $builder->saveForm();
////        $input = request()->all();
////        $csvFile = $input["excel_file"];
////
////
////
////        $csvArray = [];
////        if (($handle = fopen($csvFile, 'r')) !== FALSE) {
////            // Satır satır oku
////            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
////                // Her satırı array'e ekle
////                $csvArray[] = $data;
////            }
////            // Dosyayı kapat
////            fclose($handle);
////        }
////
////        // Array'i kontrol etmek için yazdır
////
////        $columns = explode(";", $csvArray[0][0]);
////        dd(array_values($columns));
//
//
//        //        $data = collect([['name'=>'asd1','age'=>'asd22'],['name'=>'asd1','age'=>'asd24'],['name'=>'asd1','age'=>'asd22']]);
//
//
//
//
////        $input = request()->all();
////        $excelFile = $input["excel_file"];
////
////// Excel dosyasını yüklemek için IOFactory kullanımı
////        $spreadsheet = ExcelIOFactory::load($excelFile);
////        $sheetData = $spreadsheet->getActiveSheet()->toArray();
////
////// JSON formatında verileri tutmak için bir array oluştur
////        $jsonData = [];
////
////// İlk satır başlık satırı olarak kabul ediliyor
////        $header = null;
////
////        foreach ($sheetData as $index => $row) {
////            if ($index === 0) {
////                // İlk satırı başlık olarak ayarla
////                $header = $row;
////            } else {
////                // Her bir satır için bir birleştirilmiş array oluştur
////                $jsonData[] = [
////                    'alt_resim' => $row[0], // Alt Resim sütunu
////                    'miktar' => $row[1], // Miktar sütunu
////                    'ana_resim' => $row[2], // Ana Resim sütunu
////                    'ana_parca_tanimi' => $row[3], // Ana Parça Tanımı sütunu
////                ];
////            }
////        }
////
////// JSON formatına dönüştür ve dd ile göster
////        dd($jsonData);
//
//
//    }
//}

