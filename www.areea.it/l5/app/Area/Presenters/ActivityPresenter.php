<?php

namespace Area\Presenters;

use Laracasts\Presenter\Presenter;

class ActivityPresenter extends Presenter
{
    public function slideImageUrl()
    {
        return "/uploads/" . $this->featuredImage->id ."/". $this->featuredImage->file_name . "?w=1140&h=530&fit=crop";
    }

    public function featuredImageUrl()
    {
        if ($this->featuredImage) {
            return "/uploads/" . $this->featuredImage->id ."/". $this->featuredImage->file_name . "?w=343&h=278&fit=crop";
        }

        return "/img/activity-holder.jpg";
    }
}
