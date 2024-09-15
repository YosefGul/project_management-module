<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Visiosoft\ProjectManagementModule\PartsSubImage\Form\PartsSubImageFormBuilder;
use Visiosoft\ProjectManagementModule\PartsSubImage\Table\PartsSubImageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PartsSubImageController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PartsSubImageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PartsSubImageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PartsSubImageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PartsSubImageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PartsSubImageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PartsSubImageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
