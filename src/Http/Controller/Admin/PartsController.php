<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Visiosoft\ProjectManagementModule\Part\Form\PartFormBuilder;
use Visiosoft\ProjectManagementModule\Part\Table\PartTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PartsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PartTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PartTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PartFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PartFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PartFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PartFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
