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

function formatLoadMoreUrl($input)
{
    return str_replace('/?', '/loadMoreActivities?', $input);
}