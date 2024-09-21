<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreateQualityActivityStream extends Migration
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
        'slug'          => 'quality_activity',
        'title_column'  => 'PartSubImageNumber',
        'translatable'  => true,
        'versionable'   => false,
        'trashable'     => false,
        'searchable'    => false,
        'sortable'      => false,
    ];

    /**
     * The fields to be created.
     *
     * @var array
     */
    protected $fields = [
        'PartSubImageNumber' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => \Visiosoft\ProjectManagementModule\PartsSubImage\PartsSubImageModel::class,
                'mode'    => 'lookup',
            ],
        ],

        'action_id' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    'paint_ok'            => 'Boyama Onaylandı',
                    'paint_reject'        => 'Boyama Reddedildi',
                    'welding_ok'          => 'Kaynak Onaylandı',
                    'welding_reject'      => 'Kaynak Reddedildi',
                    'measurement_ok'      => 'Ölçüm Onaylandı',
                    'measurement_reject'  => 'Ölçüm Reddedildi',
                ],
            ],
        ],
        'general_description' => [
            'type' => 'anomaly.field_type.textarea',
        ],
        'image_upload' => [
            'type' => 'anomaly.field_type.file',
        ],
        'image_capture' => [
            'type' => 'anomaly.field_type.file',
        ],
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'PartSubImageNumber' => [
            'required' => true,
            'unique'   => false,
        ],

        'action_id' => [
            'required' => true,
        ],
        'general_description' => [
            'required' => false,
        ],
        'image_upload' => [
            'required' => false,
        ],
        'image_capture' => [
            'required' => false,
        ],
    ];
}
