<?php

namespace Area\Repositories;

use Area\Models\Staff;
use Area\Models\FeaturedImage;

/**
* Staff Repo
*/
class StaffRepo
{
    public function save(Staff $staff)
    {
        $staff->save();

        return $staff;
    }

    public function remove($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        return true;
    }

    public function removeImage($id)
    {
        $image = FeaturedImage::find($id);
        $image->delete();

        return true;
    }

    public function getAll($howMany = null)
    {
        if ($howMany) {
            return Staff::with('media', 'featuredImage')->orderBy('position', 'ASC')->simplePaginate($howMany);
        } else {
            return Staff::with('media', 'featuredImage')->orderBy('position', 'ASC')->get();
        }
    }

    public function getBySlug($slug)
    {
        return Staff::with('media', 'featuredImage')->whereSlug($slug)->first();
    }

    public function getById($id)
    {
        return Staff::with('media', 'featuredImage')->whereId($id)->first();
    }

    public function getMediaForId($id)
    {
        $staff = $this->getById($id);
        
        return $staff->getMedia();
    }
}
