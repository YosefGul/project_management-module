<?php namespace Visiosoft\ProjectManagementModule\Company\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class CompanyFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'name' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Firma Adı',
            'required' => true,
        ],
        'description' => [
            'type'   => 'anomaly.field_type.textarea',
            'label'  => 'Firma Açıklaması',
        ],
        'logo' => [
            'type' => 'anomaly.field_type.file',
            'label' => 'Firma Logosu',
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
