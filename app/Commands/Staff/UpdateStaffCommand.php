<?php

namespace App\Commands\Staff;

use App\Commands\Command;

class UpdateStaffCommand extends Command
{
    public $name;
    public $intro;
    public $description;
    public $featured_image_id;
    public $staff_id;
    public $email;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($staff_id, $name, $intro, $description, $email, $featured_image_id = null)
    {
        $this->name = $name;
        $this->intro = $intro;
        $this->description = $description;
        $this->featured_image_id = $featured_image_id;
        $this->staff_id = $staff_id;
        $this->email = $email;
    }
}
