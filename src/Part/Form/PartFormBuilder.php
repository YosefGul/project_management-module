<?php namespace Visiosoft\ProjectManagementModule\Part\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class PartFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'part_name' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Part Tanımı',
            'required' => true,
        ],
        'part_number' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Part Numarası',
            'required' => true,
        ],
        'project' => [
            'type'    => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Visiosoft\ProjectManagementModule\Project\ProjectModel',
                'mode' => 'lookup',
            ],
            'label'   => 'Proje',
            'required' => true,
        ]
    ];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [

    ];

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
