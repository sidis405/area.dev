<?php

namespace Area\Repositories;

use Area\Models\Activities;
use Area\Models\ActivitiesStatus;
use Area\Models\FeaturedImage;

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

    public function remove($id)
    {   
        $activity = Activities::find($id);
        $activity->delete();

        return true;
    }

    public function removeImage($id)
    {
        $image = FeaturedImage::find($id);
        $image->delete();

        return true;
    }


    public function statuses()
    {
        return ActivitiesStatus::all();
    }

    public function getAll($howMany = null)
    {
        if ($howMany) {
            return Activities::with('media', 'status', 'featuredImage')->latest()->simplePaginate($howMany);
        } else {
            return Activities::with('media', 'status', 'featuredImage')->latest()->get();
        }
    }

    public function getBySlug($slug)
    {
        return Activities::with('media', 'status')->whereSlug($slug)->first();
    }

    public function getById($id)
    {
        return Activities::with('media', 'status', 'featuredImage')->whereId($id)->first();
    }

    public function getMediaForId($id)
    {
        $activity = $this->getById($id);
        
        return $activity->getMedia();
    }
}
