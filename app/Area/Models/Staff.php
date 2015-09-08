<?php

namespace Area\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Staff extends Model implements HasMedia
{
    use PresentableTrait, HasMediaTrait;
}
