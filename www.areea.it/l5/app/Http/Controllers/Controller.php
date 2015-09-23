<?php

namespace App\Http\Controllers;

use Area\Repositories\TextRepo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct(TextRepo $text_repo) {
        view()->share('texts', $text_repo->getAll());
    }
}
