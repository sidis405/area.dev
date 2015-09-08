
<select class="featured_image_id" name="featured_image_id" id="featured_image_id">
@foreach ($gallery as $media)

  <option data-img-src="{{ $media->getUrl() }}?w=50&h=50&fit=crop" value="{{$media->id}}" @if($activity->featured_image_id == $media->id) selected @endif>{{$media->id}}</option>
@endforeach

</select>