<?php

namespace App\Commands\Activities;

use App\Commands\Command;

class UpdateActivityCommand extends Command
{
    public $title;
    public $subtitle;
    public $description;
    public $featured;
    public $status_id;
    public $featured_image_id;
    public $activity_id;

    public function __construct($activity_id, $title, $subtitle, $description, $status_id, $featured_image_id, $featured = 'OFF')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->featured = $featured;
        $this->status_id = $status_id;
        $this->featured_image_id = $featured_image_id;
        $this->activity_id = $activity_id;
    }
}
