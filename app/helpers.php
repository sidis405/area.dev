<?php

function carouselIndicators($featured)
{
    $counter = 0;
    $first = true;
    $out = '';
    $active = '';

    foreach ($featured as $media) {
        if ($first) {
            $active = 'active';
            $first=false;
        } else {
            $active = '';
        }

        $out .= '<li data-target="#slideshow" data-slide-to="' .$counter. '" class="'.$active.'"></li>';
        $counter++;
    }

    return $out;
}

function makeImageUrl($path, $w = null, $h = null)
{
    $path = str_replace('images/', '/img/', $path);

    if($w && $h)
    {
        $path .= '?' . http_build_query(['w' => $w, 'h' => $h]);
    }

    return $path;
}

function formatLoadMoreUrl($input)
{
    return str_replace('/?', '/loadMoreActivities?', $input);
}