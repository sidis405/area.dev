<?php

namespace App\Handlers\Commands\Staff;

use App\Commands\Staff\CreateStaffCommand;
use App\Events\Staff\StaffWasCreated;
use Area\Models\Staff;
use Area\Repositories\StaffRepo;
use Event;
use Illuminate\Queue\InteractsWithQueue;

class CreateStaffCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(StaffRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateStaffCommand  $command
     * @return void
     */
    public function handle(CreateStaffCommand $command)
    {
        $staff_object = Staff::make(
            $command->name,
            str_slug($command->name, '-'),
            $command->intro,
            $command->description,
            $command->email
        );


        $staff = $this->repo->save($staff_object);

        Event::fire(new StaffWasCreated($staff));

        return $staff;
    }
}
