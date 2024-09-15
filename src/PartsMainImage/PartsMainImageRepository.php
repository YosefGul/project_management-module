<?php namespace Visiosoft\ProjectManagementModule\PartsMainImage;

use Visiosoft\ProjectManagementModule\PartsMainImage\Contract\PartsMainImageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class PartsMainImageRepository extends EntryRepository implements PartsMainImageRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var PartsMainImageModel
     */
    protected $model;

    /**
     * Create a new PartsMainImageRepository instance.
     *
     * @param PartsMainImageModel $model
     */
    public function __construct(PartsMainImageModel $model)
    {
        $this->model = $model;
    }
}
