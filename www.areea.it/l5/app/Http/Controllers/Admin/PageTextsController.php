<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Area\Repositories\TextRepo;
use Illuminate\Http\Request;

class PageTextsController extends Controller
{
    /**
     * Display a listing of the activities.
     *
     * @return Response
     */
    public function index(TextRepo $repo)
    {
        $texts = $repo->getAll();

        return view('admin.texts.index', compact('texts'));
    }

    /**
     * Show the form for editing the specified activity.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(TextRepo $repo, $id)
    {
        $text = $repo->getById($id);

        // return $text;

        return view('admin.texts.edit', compact('text'));
    }

    /**
     * Update the specified activity in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id, TextRepo $repo)
    {
        $text = $repo->updateText($id, $request);

        flash()->success('Testo modificato con successo.');

        return redirect()->to('/admin/testi/' . $text->id . '/modifica');
    }
}
