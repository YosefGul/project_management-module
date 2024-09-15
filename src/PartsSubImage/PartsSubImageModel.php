<?php namespace Visiosoft\ProjectManagementModule\PartsSubImage;

use Visiosoft\ProjectManagementModule\PartsSubImage\Contract\PartsSubImageInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsSubImageEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsSubImageModel extends ProjectManagementPartsSubImageEntryModel implements PartsSubImageInterface
{
    use HasFactory;

    /**
     * @return PartsSubImageFactory
     */
    protected static function newFactory()
    {
        return PartsSubImageFactory::new();
    }
}
