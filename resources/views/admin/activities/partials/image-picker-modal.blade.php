<div class="modal fade" role="dialog" id="gallery-modal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Scegli Immagine Per Slide</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    
            <div class="images-container" id="image-picker-select">
        @include('admin.activities.partials.image-picker-select', array('gallery' => $activity->media))
    </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" id="confirm_featured_image">Inserisci</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->