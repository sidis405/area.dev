<?php

namespace Area;

use Illuminate\Foundation\Application;

class AreaApplication extends Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'../';
    }
}
