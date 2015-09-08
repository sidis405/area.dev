<?php

namespace Area\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedImage extends Model
{
    protected $table = 'media';

    public function activities()
    {
        return $this->hasMany('Area\Models\Activity', 'featured_image_id');
    }
}
