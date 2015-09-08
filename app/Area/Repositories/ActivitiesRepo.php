<?php

namespace Area\Repositories;

use Area\Models\Activities;
use Area\Models\ActivitiesStatus;

/**
* Activities Repo
*/
class ActivitiesRepo
{
    public function save(Activities $activity)
    {
        $activity->save();

        return $activity;
    }

    public function statuses()
    {
        return ActivitiesStatus::all();
    }

    public function getAll($howMany = null)
    {
        if ($howMany) {
            return Activities::with('media', 'status')->latest()->simplePaginate($howMany);
        } else {
            return Activities::with('media', 'status')->latest()->get();
        }
    }

    public function getBySlug($slug)
    {
        return Activities::with('media', 'status')->whereSlug($slug)->first();
    }

    public function getById($id)
    {
        return Activities::with('media', 'status')->whereId($id)->first();
    }

    public function getMediaForId($id)
    {
        $activity = $this->getById($id);

        // return $activity;
        
        return $activity->getMedia();
    }
}
