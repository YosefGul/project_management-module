<?php namespace Visiosoft\ProjectManagementModule\PartsSubImage;

use Visiosoft\ProjectManagementModule\PartsSubImage\Contract\PartsSubImageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PartsSubImageRepository extends EntryRepository implements PartsSubImageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PartsSubImageModel
     */
    protected $model;

    /**
     * Create a new PartsSubImageRepository instance.
     *
     * @param PartsSubImageModel $model
     */
    public function __construct(PartsSubImageModel $model)
    {
        $this->model = $model;
    }
}
