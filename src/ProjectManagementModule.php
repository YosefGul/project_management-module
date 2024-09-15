<?php namespace Visiosoft\ProjectManagementModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class ProjectManagementModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'companies' => [
            'buttons' => [
                'new_company',
            ],
        ],
        'projects' => [
            'buttons' => [
                'new_project',
            ],
        ],
        'parts' => [
            'buttons' => [
                'new_part',
            ],
        ],
        'parts_main_image' => [
            'buttons' => [
                'new_parts_main_image',
            ],
        ],
        'parts_sub_image' => [
            'buttons' => [
                'new_parts_sub_image',
            ],
        ],





    ];

}
