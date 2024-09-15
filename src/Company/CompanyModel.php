<?php namespace Visiosoft\ProjectManagementModule\Company;

use Visiosoft\ProjectManagementModule\Company\Contract\CompanyInterface;
use Anomaly\Streams\Platform\Model\ProjectManagement\ProjectManagementCompaniesEntryModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyModel extends ProjectManagementCompaniesEntryModel implements CompanyInterface
{
    use HasFactory;

    /**
     * @return CompanyFactory
     */
    protected static function newFactory()
    {
        return CompanyFactory::new();
    }
}
