<?php namespace Visiosoft\ProjectManagementModule\QualityActivity\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class QualityActivityTableBuilder extends TableBuilder
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
        'entry.PartSubImageNumber' => [
            'heading' => 'Alt Resim No',
        ],
        'entry.action_id'  => [
            'heading' => 'Parça Durumu',
        ],
        'entry.general_description' => [
            'heading' => 'Açıklaması',
        ],
        'entry.created_at' => [
            'heading' => 'Oluşturma Tarihi',
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
