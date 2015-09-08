<?php

namespace App\Handlers\Commands\Activities;

use App\Commands\Activities\UpdateActivityCommand;
use App\Events\Activities\ActivityWasUpdated;
use Area\Models\Activities;
use Area\Repositories\ActivitiesRepo;
use Event;
use Illuminate\Queue\InteractsWithQueue;

class UpdateActivityCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ActivitiesRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateActivityCommand  $command
     * @return void
     */
    public function handle(UpdateActivityCommand $command)
    {

        $activity_object = Activities::edit(
            $command->activity_id,
            $command->title,
            str_slug($command->title, '-'),
            $command->subtitle,
            $command->description,
            strtoupper($command->featured),
            $command->status_id,
            $command->featured_image_id
        );


        $activity = $this->repo->save($activity_object);

        Event::fire(new ActivityWasUpdated($activity));

        return $activity;
    }
}
