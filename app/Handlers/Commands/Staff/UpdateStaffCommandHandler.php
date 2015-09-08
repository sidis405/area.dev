<?php

namespace App\Handlers\Commands\Staff;

use App\Commands\Staff\UpdateStaffCommand;
use App\Events\Staff\StaffWasUpdated;
use Area\Models\Staff;
use Area\Repositories\StaffRepo;
use Event;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStaffCommandHandler
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
     * @param  UpdateStaffCommand  $command
     * @return void
     */
    public function handle(UpdateStaffCommand $command)
    {
        $staff_object = Staff::edit(
            $command->staff_id,
            $command->name,
            str_slug($command->name, '-'),
            $command->intro,
            $command->description,
            $command->featured_image_id
        );

        $staff = $this->repo->save($staff_object);

        Event::fire(new StaffWasUpdated($staff));

        return $staff;
    }
}
