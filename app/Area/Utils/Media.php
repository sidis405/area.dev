<?php

namespace Area\Utils;

use Vinkla\Hashids\Facades\Hashids;

/**
* Media Library Uploader Class
*/
class Media
{
    public function attach($model, $file, $withName = false)
    {
        if ($withName) {
            $filename = $this->makeName($file);

            $path = $model->addMedia($file)->usingFileName($filename)->toCollection('images')->getUrl();
        } else {
            $path = $model->addMedia($file)->toCollection('images')->getUrl();
        }


        return $path;
    }

    public function makeName($file)
    {
        $filename  = $file->getClientOriginalName();
        
        $extension  = $file->getClientOriginalExtension();

        $filename = str_replace($extension, '', $filename);

        return Hashids::encode(time()) . '-' . str_slug(strtolower($filename)) . '.' . $extension;
    }
}
