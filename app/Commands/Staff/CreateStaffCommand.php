<?php

namespace App\Commands\Staff;

use App\Commands\Command;

class CreateStaffCommand extends Command
{
    public $name;
    public $intro;
    public $description;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name, $intro, $description)
    {
        $this->name = $name;
        $this->intro = $intro;
        $this->description = $description;
    }
}
