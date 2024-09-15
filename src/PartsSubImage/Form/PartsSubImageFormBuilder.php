<?php namespace Visiosoft\ProjectManagementModule\PartsSubImage\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class PartsSubImageFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'PartSubImageNumber' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Part Alt Resim',
            'required' => true,
        ],
        'ProjectMainPart' => [
            'type'    => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Visiosoft\\ProjectManagementModule\\PartsMainImage\\PartsMainImageModel',
                'mode' => 'lookup',
            ],
            'label'   => 'Part Ana Resim',
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
