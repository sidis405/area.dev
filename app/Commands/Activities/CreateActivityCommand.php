<?php

namespace App\Commands\Activities;

use App\Commands\Command;

class CreateActivityCommand extends Command
{
    public $title;
    public $subtitle;
    public $description;

    public function __construct($title, $subtitle, $description)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }
}
