<?php namespace Visiosoft\ProjectManagementModule\Http\Controller\Admin;

use Illuminate\Http\Request;
use Visiosoft\ProjectManagementModule\QualityActivity\Form\QualityActivityFormBuilder;
use Visiosoft\ProjectManagementModule\QualityActivity\QualityActivityModel;
use Visiosoft\ProjectManagementModule\QualityActivity\Table\QualityActivityTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Support\Facades\Auth;

class QualityActivityController extends AdminController
{
    /**
     * Display an index of existing entries.
     *
     * @param QualityActivityTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(QualityActivityTableBuilder $table)
    {
        $table->on('querying', function ($query) {
            $query->with('user');
        });

        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param QualityActivityFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(QualityActivityFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param QualityActivityFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(QualityActivityFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Store a new entry in the database.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'PartSubImageNumber'   => 'required',
            'action_id'            => 'required|string',
            'general_description'  => 'nullable|string',
            'image_upload'         => 'nullable|file',
            'image_capture'        => 'nullable|file',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Create a new quality activity record
        QualityActivityModel::create([
            'PartSubImageNumber_id' => $request->input('PartSubImageNumber'),
            'action_id'             => $request->input('action_id'),
            'general_description'   => $request->input('general_description'),
            'image_upload'          => $request->file('image_upload') ? $request->file('image_upload')->store('uploads', 'public') : null,
            'image_capture'         => $request->file('image_capture') ? $request->file('image_capture')->store('captures', 'public') : null,
        ]);

        return redirect()->route('visiosoft.module.project_management::quality_activity.index')->with('success', 'Aksiyon başarıyla kaydedildi.');
    }

    /**
     * Approve an existing activity.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function approveAction($id)
    {
        $qualityActivity = QualityActivityModel::findOrFail($id); // Veriyi bulamazsa hata fırlatır
        $qualityActivity->approved = true; // Onaylama işlemi
        $qualityActivity->save();

        return redirect()->route('visiosoft.module.project_management::quality_activity.index')->with('success', 'Aksiyon başarıyla onaylandı.');
    }
}
