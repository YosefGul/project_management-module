<?php namespace Visiosoft\ProjectManagementModule\PartsMainImage;

use Visiosoft\ProjectManagementModule\PartsMainImage\Contract\PartsMainImageInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsMainImageEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsMainImageModel extends ProjectManagementPartsMainImageEntryModel implements PartsMainImageInterface
{
    use HasFactory;

    /**
     * @return PartsMainImageFactory
     */
    protected static function newFactory()
    {
        return PartsMainImageFactory::new();
    }
}
