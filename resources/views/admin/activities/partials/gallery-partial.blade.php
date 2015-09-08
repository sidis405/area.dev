@foreach ($gallery as $media)
<div class="col-md-2 gallery-item-container" id="media_gallery_{{$media->id}}">
<i class="fa fa-times-circle-o delete-media" data-id="{{ $media->id }}"></i>
    <a href="{{ $media->getUrl() }}" class="gallery-item">
        <img class="img-responsive" src="{{ $media->getUrl() }}?w=200&h=200&fit=crop">
    </a>
</div>
@endforeach