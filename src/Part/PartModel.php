<?php namespace Visiosoft\ProjectManagementModule\Part;

use Visiosoft\ProjectManagementModule\Part\Contract\PartInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementPartsEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartModel extends ProjectManagementPartsEntryModel implements PartInterface
{
    use HasFactory;

    /**
     * @return PartFactory
     */
    protected static function newFactory()
    {
        return PartFactory::new();
    }
}
