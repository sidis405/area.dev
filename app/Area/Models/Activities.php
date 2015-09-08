<?php

namespace Area\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Activities extends Model implements HasMedia
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    use PresentableTrait, HasMediaTrait;

    public function status()
    {
        return $this->belongsTo('Area\Models\ActivitiesStatus', 'status_id');
    }

    public function featuredImage()
    {
        return $this->belongsTo('Area\Models\FeaturedImage', 'featured_image_id');
    }

    public static function make($title, $slug, $subtitle, $description, $featured)
    {
        $activity = new static(compact('title', 'slug', 'subtitle', 'description', 'featured'));

        return $activity;
    }

    public static function edit($activity_id, $title, $slug, $subtitle, $description, $featured, $status_id, $featured_image_id)
    {
 
        if ($featured == 'OFF') {
            $featured_image_id = null;
        }

        $activity = static::find($activity_id);

        $activity->title                = $title;
        $activity->slug                 = $slug;
        $activity->subtitle             = $subtitle;
        $activity->description          = $description;
        $activity->status_id            = $status_id;
        $activity->featured_image_id    = $featured_image_id;
        $activity->featured             = $featured;

        return $activity;
    }
}
