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
        $activity = $activities->getById($request->input('activity_id'));
        $gallery = $activities->getMediaForId($request->input('activity_id'));

        $data = [
            'gallery_partial' => view('admin.activities.partials.gallery-partial', compact('gallery'))->render(),
            'image_picker_select' => view('admin.activities.partials.image-picker-select', compact('activity', 'gallery'))->render()
        ];

        return $data;

    }

  
    public function store(Request $request, Media $media, ActivitiesRepo $activities)
    {
        $activity = $activities->getById($request->input('activity_id'));

        return $media->attach($activity, $request->file('file'));

    }
}
