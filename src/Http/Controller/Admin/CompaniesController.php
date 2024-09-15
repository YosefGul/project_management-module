<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Visiosoft\ProjectManagementModule\Company\Form\CompanyFormBuilder;
use Visiosoft\ProjectManagementModule\Company\Table\CompanyTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CompaniesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CompanyTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CompanyTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CompanyFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CompanyFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CompanyFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CompanyFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
