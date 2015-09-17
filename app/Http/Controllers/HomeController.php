<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Area\Repositories\ActivitiesRepo;
use Area\Repositories\StaffRepo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * sdasd
     * @param  ActivitiesRepo $activities_repo wew
     * @param  StaffRepo      $staff_repo      weq
     * @param  TextRepo       $text_repo       sdadas
     * @return qwe                          weqw
     */
    public function index(ActivitiesRepo $activities_repo, StaffRepo $staff_repo)
    {
        $featured = $activities_repo->getFeatured();

        $activities = $activities_repo->getAll(10);

        $staff = $staff_repo->getAll();

        return view('home.index', compact('featured', 'activities', 'staff'));
    }

    public function loadMoreActivities(ActivitiesRepo $activities_repo)
    {
        $activities = $activities_repo->getAll(10);

        return [
            'layout' => view('home.partials.activities-partial', compact('activities'))->render(), 
            'url' => str_replace('/?', '?', $activities->nextPageUrl()),
            'more' => $activities->hasMorePages(), 
            'galleries' => view('home.partials.gallery-partial-main', compact('activities'))->render()];
    }
}
