<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreatePartsMainImageStream extends Migration
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
        'slug' => 'parts_main_image',
        'title_column' => 'PartMainImageNumber',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    protected $fields = [
        'PartMainImageNumber' => 'anomaly.field_type.text',  // Proje Numarası
        'part' => [
            'type' => 'anomaly.field_type.relationship',  // Firma Seçimi
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\Part\\PartModel',
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
        'PartMainImageNumber' => [
            'required' => true,
        ],
        'part' => [
            'required' => true,
        ],
    ];

}
