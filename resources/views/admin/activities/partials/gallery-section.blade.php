<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Galleria Immagini</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group dropzone-previews gallery-container">
                    
                    @if( count( $activity->media ) > 0)

                    <div class="images-container" id="images-container">

                        @include('admin.activities.partials.gallery-partial', array('gallery' => $activity->media))


                    </div>

                    @else

                    <div class="images-container" id="images-container">
                        
                        Non ci sono immagini associate a questa attività

                    </div>
                    
                    @endif
                </div>
                
            </div>
            <div class="col-lg-12">
                
                <div class="col-md-12">
                    <form class="dropzone" action="/admin/attivita/upload_image" method="POST" id="activity-image-upload-form">
                        {{csrf_field()}}
                        <input type="hidden" name="activity_id"  id="activity_id" value="{{ $activity->id }}">
                    </form>
                </div>
            </div>
            
            
        </div>
        
        
    </div>
</div>

@include('admin.activities.partials.image-picker-modal', array('gallery' => $activity->media))
