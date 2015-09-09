@foreach ($activities as $activity)
    @include('home.partials.gallery-partial', array('gallery'=>$activity->media, 'id' => $activity->id)) 
    @endforeach