<?php namespace Visiosoft\ProjectManagementModule\Project;

use Visiosoft\ProjectManagementModule\Project\Contract\ProjectRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ProjectRepository extends EntryRepository implements ProjectRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ProjectModel
     */
    protected $model;

    /**
     * Create a new ProjectRepository instance.
     *
     * @param ProjectModel $model
     */
    public function __construct(ProjectModel $model)
    {
        $this->model = $model;
    }
}
