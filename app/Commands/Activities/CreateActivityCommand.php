<?php

namespace App\Commands\Activities;

use App\Commands\Command;

class CreateActivityCommand extends Command
{
    public $title;
    public $subtitle;
    public $description;
    public $featured;

    public function __construct($title, $subtitle, $description, $featured = 'OFF')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->featured = $featured;
    }
}
