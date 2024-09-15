<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreatePartsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'parts',
        'title_column' => 'part_name',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];


    protected $fields = [
        'part_name' => 'anomaly.field_type.text',  // Proje Numarası
        'part_number' => 'anomaly.field_type.text',  // Proje Numarası
        'project' => [
            'type' => 'anomaly.field_type.relationship',  // Firma Seçimi
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\Company\\CompanyModel',
                'mode' => 'lookup',
            ],
        ]
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'part_name' => [
            'required' => true,
        ],
        'part_number' => [
            'required' => true,
        ],
        'project' => [
            'required' => true,
        ],
    ];

}
