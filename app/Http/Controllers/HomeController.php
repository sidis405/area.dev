<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Area\Repositories\ActivitiesRepo;
use Area\Repositories\StaffRepo;
use Area\Repositories\TextRepo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(ActivitiesRepo $activities_repo, StaffRepo $staff_repo, TextRepo $text_repo)
    {

        $featured = $activities_repo->getFeatured();

        // return $featured;

        $activities = $activities_repo->getAll(5);

        // return $activities;
        
        $staff = $staff_repo->getAll();

        // return $staff;
        
        $texts = $text_repo->getAll();

        // return $texts;

        return view('home.index', compact('featured', 'activities', 'staff', 'texts'));
    }

    public function loadMoreActivities(ActivitiesRepo $activities_repo)
    {
        $activities = $activities_repo->getAll(5);



        return [
            'layout' => view('home.partials.activities', compact('activities'))->render(), 
            'url' => str_replace('/?', '?', $activities->nextPageUrl()),
            'more' => $activities->hasMorePages(), 
            'galleries' => view('home.partials.gallery-partial-main', compact('activities'))->render()];
    }
}
