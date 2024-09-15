<?php namespace Visiosoft\ProjectManagementModule\Project\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class ProjectTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'entry.project_number' => [
            'heading' => 'Proje Numarası',
        ],
        'entry.description' => [
            'heading' => 'Açıklama',
        ],
        'entry.company.name' => [
            'heading' => 'Firma',
        ],
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
