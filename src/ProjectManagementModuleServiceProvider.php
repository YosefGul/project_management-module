<?php namespace Visiosoft\ProjectManagementModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Visiosoft\ProjectManagementModule\PartsSubImage\Contract\PartsSubImageRepositoryInterface;
use Visiosoft\ProjectManagementModule\PartsSubImage\PartsSubImageRepository;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsSubImageEntryModel;
use Visiosoft\ProjectManagementModule\PartsSubImage\PartsSubImageModel;
use Visiosoft\ProjectManagementModule\PartsMainImage\Contract\PartsMainImageRepositoryInterface;
use Visiosoft\ProjectManagementModule\PartsMainImage\PartsMainImageRepository;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsMainImageEntryModel;
use Visiosoft\ProjectManagementModule\PartsMainImage\PartsMainImageModel;
use Visiosoft\ProjectManagementModule\Part\Contract\PartRepositoryInterface;
use Visiosoft\ProjectManagementModule\Part\PartRepository;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsEntryModel;
use Visiosoft\ProjectManagementModule\Part\PartModel;
use Visiosoft\ProjectManagementModule\Project\Contract\ProjectRepositoryInterface;
use Visiosoft\ProjectManagementModule\Project\ProjectRepository;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementProjectsEntryModel;
use Visiosoft\ProjectManagementModule\Project\ProjectModel;
use Visiosoft\ProjectManagementModule\Company\Contract\CompanyRepositoryInterface;
use Visiosoft\ProjectManagementModule\Company\CompanyRepository;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementCompaniesEntryModel;
use Visiosoft\ProjectManagementModule\Company\CompanyModel;
use Illuminate\Routing\Router;

class ProjectManagementModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/project_management/parts_sub_image'           => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsSubImageController@index',
        'admin/project_management/parts_sub_image/create'    => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsSubImageController@create',
        'admin/project_management/parts_sub_image/edit/{id}' => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsSubImageController@edit',
        'admin/project_management/parts_main_image'           => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsMainImageController@index',
        'admin/project_management/parts_main_image/create'    => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsMainImageController@create',
        'admin/project_management/parts_main_image/edit/{id}' => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsMainImageController@edit',
        'admin/project_management/parts'           => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsController@index',
        'admin/project_management/parts/create'    => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsController@create',
        'admin/project_management/parts/edit/{id}' => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\PartsController@edit',
         'admin/project_management/projects'           => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\ProjectsController@index',
        'admin/project_management/projects/create'    => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\ProjectsController@create',
        'admin/project_management/projects/edit/{id}' => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\ProjectsController@edit',
        'admin/project_management'           => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\CompaniesController@index',
        'admin/project_management/create'    => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\CompaniesController@create',
        'admin/project_management/edit/{id}' => 'Visiosoft\ProjectManagementModule\Http\Controller\Admin\CompaniesController@edit',

    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Visiosoft\ProjectManagementModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Visiosoft\ProjectManagementModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Visiosoft\ProjectManagementModule\Event\ExampleEvent::class => [
        //    Visiosoft\ProjectManagementModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Visiosoft\ProjectManagementModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        ProjectManagementPartsSubImageEntryModel::class => PartsSubImageModel::class,
        ProjectManagementPartsMainImageEntryModel::class => PartsMainImageModel::class,
        ProjectManagementPartsEntryModel::class => PartModel::class,
        ProjectManagementProjectsEntryModel::class => ProjectModel::class,
        ProjectManagementCompaniesEntryModel::class => CompanyModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        PartsSubImageRepositoryInterface::class => PartsSubImageRepository::class,
        PartsMainImageRepositoryInterface::class => PartsMainImageRepository::class,
        PartRepositoryInterface::class => PartRepository::class,
        ProjectRepositoryInterface::class => ProjectRepository::class,
        CompanyRepositoryInterface::class => CompanyRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
