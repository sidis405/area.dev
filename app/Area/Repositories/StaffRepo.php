<?php

namespace Area\Repositories;

use Area\Models\Staff;

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

    public function getAll($howMany = null)
    {
        if ($howMany) {
            return Staff::with('media')->latest()->simplePaginate($howMany);
        } else {
            return Staff::with('media')->latest()->get();
        }
    }

    public function getBySlug($slug)
    {
        return Staff::with('media')->whereSlug($slug)->first();
    }

    public function getById($id)
    {
        return Staff::with('media')->whereId($id)->first();
    }
}
