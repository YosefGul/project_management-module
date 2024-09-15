<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Ui\Icon\Icon;
use Visiosoft\ProjectManagementModule\Project\Form\ProjectFormBuilder;
use Visiosoft\ProjectManagementModule\Project\Table\ProjectTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ProjectsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ProjectTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ProjectTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ProjectFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ProjectFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ProjectFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ProjectFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
