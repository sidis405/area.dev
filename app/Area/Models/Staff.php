<?php

namespace Area\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Staff extends Model implements HasMedia
{
    protected $fillable = ['name', 'slug', 'intro', 'description', 'order'];

    use PresentableTrait, HasMediaTrait;

    public function featuredImage()
    {
        return $this->belongsTo('Area\Models\FeaturedImage', 'featured_image_id');
    }

    public static function make($name, $slug, $intro, $description)
    {   
        $staff = new static(compact('name', 'slug', 'intro', 'description'));

        return $staff;
    }

    public static function edit($staff_id, $name, $slug, $intro, $description, $featured_image_id)
    {
 
        $staff = static::find($staff_id);

        $staff->name                = $name;
        $staff->slug                 = $slug;
        $staff->intro                = $intro;
        $staff->description          = $description;
        $staff->featured_image_id    = $featured_image_id;
    
        return $staff;
    }
}
