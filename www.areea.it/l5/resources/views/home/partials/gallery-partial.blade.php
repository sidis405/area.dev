@foreach ($gallery as $media)
<div id="media_gallery_{{$id}}">
    <a href="{{ $media->getUrl() }}" class="gallery-item-{{$id}}"></a>
</div>

<script type="text/javascript">
    
$(document).find('.gallery-item-' + {{$id}}).magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });


</script>

@endforeach