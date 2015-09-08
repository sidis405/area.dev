<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Activities\CreateActivityRequest;
use Area\Repositories\ActivitiesRepo;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the activities.
     *
     * @return Response
     */
    public function index(ActivitiesRepo $repo)
    {
        $activities = $repo->getAll();

        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new activity.
     *
     * @return Response
     */
    public function create(ActivitiesRepo $repo)
    {
        return 
        $statuses = $repo->statuses();

        return view('admin.activities.create', compact('statuses'));
    }

    /**
     * Store a newly created activity in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateActivityRequest $request)
    {
        $activity = $this->dispatchFrom('App\Commands\Activities\CreateActivityCommand', $request);

        flash()->success('Attività creata con successo.');

        return redirect()->to('/admin/attivita/' . $activity->id . '/modifica');
    }


    /**
     * Show the form for editing the specified activity.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(ActivitiesRepo $repo, $id)
    {
        $activity = $repo->getById($id);
        $statuses = $repo->statuses();


        return view('admin.activities.edit', compact('activity', 'statuses'));
    }

    /**
     * Update the specified activity in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified activity from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
