<?php namespace Visiosoft\ProjectManagementModule\QualityActivity;

use Visiosoft\ProjectManagementModule\QualityActivity\Contract\QualityActivityInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementQualityActivityEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QualityActivityModel extends ProjectManagementQualityActivityEntryModel implements QualityActivityInterface
{
    use HasFactory;

    /**
     * @return QualityActivityFactory
     */

    protected $fillable = [
        'PartSubImageNumber',
        'action_id',
        'general_description',
        'image_upload',
        'image_capture',
    ];
    protected static function newFactory()
    {
        return QualityActivityFactory::new();
    }


}
