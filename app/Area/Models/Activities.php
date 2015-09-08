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

    public static function make($title, $slug, $subtitle, $description)
    {
        $activity = new static(compact('title', 'slug', 'subtitle', 'description'));

        return $activity;
    }

    public static function edit($title, $slug, $subtitle, $description)
    {
        $activity = static::find($id);

        $activity->title         = $title;
        $activity->slug          = $slug;
        $activity->subtitle      = $subtitle;
        $activity->description   = $description;

        return $activity;

    }
}
