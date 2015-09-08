<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Staff\CreateStaffRequest;
use App\Http\Requests\Staff\UpdateStaffRequest;
use Area\Repositories\StaffRepo;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the activities.
     *
     * @return Response
     */
    public function index(StaffRepo $repo)
    {
        $staff = $repo->getAll();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new Staff.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created Staff in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateStaffRequest $request)
    {


        $staff = $this->dispatchFrom('App\Commands\Staff\CreateStaffCommand', $request);

        flash()->success('Profilo staff creato con successo.');

        return redirect()->to('/admin/staff/' . $staff->id . '/modifica');
    }


    /**
     * Show the form for editing the specified Staff.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(StaffRepo $repo, $id)
    {
        $staff = $repo->getById($id);

        return view('admin.staff.edit-simple', compact('staff'));
    }

    /**
     * Update the specified Staff in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateStaffRequest $request)
    {
        
        $staff = $this->dispatchFrom('App\Commands\Staff\UpdateStaffCommand', $request);

        flash()->success('Profilo staff modificato con successo.');

        return redirect()->to('/admin/staff/' . $staff->id . '/modifica');
    }

    /**
     * Remove the specified Staff from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, StaffRepo $repo)
    {
        $delete = $repo->remove($id);

        flash()->success('Profilo staff cancellato con successo.');

        return redirect()->to('/admin/staff/');
    }

    /**
     * Remove the specified Staff from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroyImage(Request $request, StaffRepo $repo)
    {
        $image_id = $request->input('image_id');

        $delete = $repo->removeImage($image_id);

        return json_encode('true');
    }
}
