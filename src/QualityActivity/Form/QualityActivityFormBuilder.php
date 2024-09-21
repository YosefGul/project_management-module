<?php namespace Visiosoft\ProjectManagementModule\QualityActivity\Form;

use Anomaly\Streams\Platform\Ui\Form\Command\BuildForm;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Illuminate\Support\Facades\Auth;

class QualityActivityFormBuilder extends FormBuilder
{
    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'PartSubImageNumber' => [
            'label' => 'Alt Resim',
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Visiosoft\ProjectManagementModule\PartsSubImage\PartsSubImageModel',
                'mode' => 'lookup',
            ],
        ],

        'action_id' => [
            'label' => 'Aksiyon',
            'type' => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    'paint_ok' => 'Boyama Onaylandı',
                    'paint_reject' => 'Boyama Reddedildi',
                    'welding_ok' => 'Kaynak Onaylandı',
                    'welding_reject' => 'Kaynak Reddedildi',
                    'measurement_ok' => 'Ölçüm Onaylandı',
                    'measurement_reject' => 'Ölçüm Reddedildi',
                ],
            ],
        ],
        'general_description' => [
            'label' => 'Genel Açıklama',
            'type' => 'anomaly.field_type.textarea',
        ],
        'image_upload' => [
            'label' => 'Resim Yükle',
            'type' => 'anomaly.field_type.file',
        ],
        'image_capture' => [
            'label' => 'Resim Çek',
            'type' => 'anomaly.field_type.file',
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
    protected $skips = [
    ];

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

    /**
     * Build the form.
     *
     * @param mixed $entry
     * @return $this
     */

}