<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class VisiosoftModuleProjectManagementCreateCompaniesStream extends Migration
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
        'slug' => 'companies',
        'title_column' => 'name',
        'translatable' => true,
        'versionable' => false,
        'trashable' => true,
        'searchable' => true,
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */

    protected $fields = [
        'name' => 'anomaly.field_type.text', // Firma adı
        'description' => 'anomaly.field_type.text',
        'logo' => 'anomaly.field_type.file', // Firma logosu
    ];

    protected $assignments = [
        'name' => [
            'required' => true,
            'unique' => true,
        ],
        'description' => [
            'required' => false,
        ],
        'logo' => [
            'required' => false,
        ],
    ];

}
