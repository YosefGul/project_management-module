<?php namespace Visiosoft\ProjectManagementModule\QualityActivity;

use Visiosoft\ProjectManagementModule\QualityActivity\Contract\QualityActivityRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class QualityActivityRepository extends EntryRepository implements QualityActivityRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var QualityActivityModel
     */
    protected $model;

    /**
     * Create a new QualityActivityRepository instance.
     *
     * @param QualityActivityModel $model
     */
    public function __construct(QualityActivityModel $model)
    {
        $this->model = $model;
    }
}
