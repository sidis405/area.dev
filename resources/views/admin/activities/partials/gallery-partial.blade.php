@foreach ($gallery as $media)
<div class="col-md-2 gallery-item">
    <img class="img-responsive" src="{{ $media->getUrl() }}?w=200&h=200&fit=crop">
</div>
@endforeach