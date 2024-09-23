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
        ],'user' => [
            'type' => 'anomaly.field_type.relationship',  // Firma Seçimi
            'config' => [
                'related' => 'Anomaly\\UsersModule\\User\\UserModel',
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
        'user' => ['required' => false],
        'company' => ['required' => true],
        'excel_file' => ['required' => false],
        'images' => ['required' => false],
        'status' => ['required' => true],
    ];


}
