<?php namespace Visiosoft\ProjectManagementModule\Part;

use Visiosoft\ProjectManagementModule\Part\Contract\PartRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PartRepository extends EntryRepository implements PartRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PartModel
     */
    protected $model;

    /**
     * Create a new PartRepository instance.
     *
     * @param PartModel $model
     */
    public function __construct(PartModel $model)
    {
        $this->model = $model;
    }
}
