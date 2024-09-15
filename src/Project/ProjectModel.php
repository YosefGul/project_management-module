<?php namespace Visiosoft\ProjectManagementModule\Project;

use Visiosoft\ProjectManagementModule\Project\Contract\ProjectInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementProjectsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectModel extends ProjectManagementProjectsEntryModel implements ProjectInterface
{
    use HasFactory;

    /**
     * @return ProjectFactory
     */
    protected static function newFactory()
    {
        return ProjectFactory::new();
    }
}
