@foreach ($activities as $activity)
            <div class="col-xs-12 attivita" id="{{$activity->slug}}">
                <div class="media">
                    <div class="row">
                       <div class="col-md-4 col-sm-4">                     
                          <div class="media-left media-middle">                            
                              <img class="media-object img-responsive" src="{{$activity->present()->featuredImageUrl()}}" alt="">             
                          </div>
                       </div>
                       <div class="col-md-8 col-sm-8">
                          <div class="media-body">                    
                            <h4 class="media-heading activity-title">{{ $activity->title }}</h4>
                            <span class="media-heading activity-subtitle">{{ $activity->subtitle }}</span>

                            @if(strlen($activity->description) > 200)
                                    <div class="full-text" id="full_text_{{$activity->id}}" style="display:none;">{{nl2br($activity->description)}}</div>
                                    <div class="truncated-text" id="truncated_text_{{$activity->id}}" style="display:none;">{!!substr(nl2br($activity->description), 0, 200) !!} ...</div>

                                     <p class="activity-description truncated">
                                        {!! substr(nl2br($activity->description), 0, 200) !!} ... 
                                    </p>
                                    <a class="pull-right activity-expander read-more" data-id="{{$activity->id}}">Leggi di più</a>
                                @else 
                                    <p class="activity-description">
                                     {{ $activity->description }}
                                     </p>
                                @endif

                            <span class="status">{{ $activity->status->title }}</span>
  
                          @if(count($activity->media) > 0)
                            <div class="camera">
                                <i class="fa fa-camera gallery-button" data-id="{{$activity->id}}"></i>
                                <span class="counter">({{ count($activity->media) }})</span>
                            </div>    
                          @endif                        
                          </div>
                      </div>
                  </div>
                </div> 
            </div> <!-- end of attivita -->
     @endforeach             