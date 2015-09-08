<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Area\Repositories\ActivitiesRepo;
use Area\Utils\Media;

class FilesController extends Controller
{
 

    public function index(Request $request, ActivitiesRepo $activities)
    {
        $gallery = $activities->getMediaForId($request->input('activity_id'));

        return view('admin.activities.partials.gallery-partial', compact('gallery'));

    }

  
    public function store(Request $request, Media $media, ActivitiesRepo $activities)
    {
        $activity = $activities->getById($request->input('activity_id'));

        return $media->attach($activity, $request->file('file'));

    }
}
