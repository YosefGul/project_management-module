<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreatePartsSubImageStream extends Migration
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
        'slug' => 'parts_sub_image',
        'title_column' => 'PartSubImageNumber',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    protected $fields = [
        'PartSubImageNumber' => 'anomaly.field_type.text',  // Proje Numarası
        'quantity' => 'anomaly.field_type.text',  // Proje Numarası
        'ProjectMainPart' => [
            'type' => 'anomaly.field_type.relationship',  // Firma Seçimi
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\PartsMainImage\\PartsMainImageModel',
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
        'PartSubImageNumber' => [
            'required' => true,
        ],
        'quantity' => [
            'required' => true,
        ],
        'ProjectMainPart' => [
            'required' => true,
        ],
    ];

}
