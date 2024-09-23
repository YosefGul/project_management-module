<?php namespace Visiosoft\ProjectManagementModule\Project\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class ProjectFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'project_number' => [
            'type'   => 'anomaly.field_type.text',
            'label'  => 'Proje Numarası',
            'required' => true,
        ],
        'description' => [
            'type'   => 'anomaly.field_type.textarea',
            'label'  => 'Proje Açıklaması',
        ],
        'company' => [
            'type'    => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Visiosoft\ProjectManagementModule\Company\CompanyModel',
                'mode' => 'lookup',
            ],
            'label'   => 'Firma',
        ], 'user' => [
            'type'    => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\UsersModule\User\UserModel',
                'mode' => 'lookup',
            ],
            'label'   => 'Kullanici Seçimi',
        ],
        'excel_file' => [
            'type' => 'anomaly.field_type.text',
            'label' => 'Excel Dosyası',
        ],
        'images' => [
            'type' => 'anomaly.field_type.text',
            'label' => 'Resimler',
        ],
        'status' => [
            'type' => 'anomaly.field_type.select',  // Durum
            'config' => [
                'options' => [
                    'in_progress' => 'Devam Ediyor',
                    'completed' => 'Tamamlandı',
                ],
            ],
            'label' => 'Proje Durumu',
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
