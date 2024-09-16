<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreateProjectsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = false;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'projects',
        'title_column' => 'project_number',
        'translatable' => false,
        'versionable' => false,
    ];

    protected $fields = [
        'project_number' => 'anomaly.field_type.text',  // Proje Numarası
        'description' => 'anomaly.field_type.textarea',  // Proje Açıklaması
        'company' => [
            'type' => 'anomaly.field_type.relationship',  // Firma Seçimi
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\Company\\CompanyModel',
                'mode' => 'lookup',
            ],
        ],
        'excel_file' => 'anomaly.field_type.text',  // Excel Dosyası
        'images' => 'anomaly.field_type.text',  // Resimler
        'part' => 'anomaly.field_type.text',  // Ana Parça Resim No
        'status' => [
            'type' => 'anomaly.field_type.select',  // Durum
            'config' => [
                'options' => [
                    'in_progress' => 'Devam Ediyor',
                    'completed' => 'Tamamlandı',
                ],
            ],
        ],
    ];

    protected $assignments = [
        'project_number' => ['required' => true, 'unique' => true],
        'description' => ['required' => false],
        'company' => ['required' => true],
        'excel_file' => ['required' => false],
        'images' => ['required' => false],
        'part' => ['required' => true],
        'main_image_no' => ['required' => true],  // Ana Parça Resim No zorunlu
        'sub_image_no' => ['required' => true],  // Ana Parça Resim No zorunlu
        'miktar' => ['required' => false],
        'status' => ['required' => true],
        'control_result' => ['required' => false],
        'control_description' => ['required' => false],
        'error_image' => ['required' => false],
        'control_approved' => ['required' => false],
    ];


}
