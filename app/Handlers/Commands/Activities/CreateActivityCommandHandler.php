<?php

namespace App\Handlers\Commands\Activities;

use App\Commands\Activities\CreateActivityCommand;
use App\Events\Activities\ActivityWasCreated;
use Area\Models\Activities;
use Area\Repositories\ActivitiesRepo;
use Event;
use Illuminate\Queue\InteractsWithQueue;

class CreateActivityCommandHandler
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
     * @param  CreateActivityCommand  $command
     * @return void
     */
    public function handle(CreateActivityCommand $command)
    {
        $activity_object = Activities::make(
            $command->title,
            str_slug($command->title, '-'),
            $command->subtitle,
            $command->description
        );

        $activity = $this->repo->save($activity_object);

        Event::fire(new ActivityWasCreated($activity));

        return $activity;
    }
}
