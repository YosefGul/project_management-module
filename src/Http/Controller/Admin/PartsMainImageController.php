<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Visiosoft\ProjectManagementModule\PartsMainImage\Form\PartsMainImageFormBuilder;
use Visiosoft\ProjectManagementModule\PartsMainImage\Table\PartsMainImageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class PartsMainImageController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param PartsMainImageTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PartsMainImageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param PartsMainImageFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PartsMainImageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param PartsMainImageFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PartsMainImageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
