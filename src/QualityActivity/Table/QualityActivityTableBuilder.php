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
        'entry.PartSubImageNumber',

        'entry.action_id',
        'entry.general_description',
        'entry.image_upload',  // Yüklenen Resim
        'entry.image_capture', // Çekilen Resim
        'entry.created_at',
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
