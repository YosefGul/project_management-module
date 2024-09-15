<?php namespace Visiosoft\ProjectManagementModule\PartsMainImage\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class PartsMainImageFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'PartMainImageNumber' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Part Ana Resim',
            'required' => true,
        ],
        'part' => [
            'type'    => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\Part\\PartModel',
                'mode' => 'lookup',
            ],
            'label'   => 'Part',
        ],

    ];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'cancel',
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

}
