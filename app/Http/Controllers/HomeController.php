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

        $activities = $activities_repo->getAll();

        // return $activities;
        
        $staff = $staff_repo->getAll();

        // return $staff;
        
        $texts = $text_repo->getAll();

        // return $texts;

        return view('home.index', compact('featured', 'activities', 'staff', 'texts'));
    }
}
