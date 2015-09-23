function getImagesForActivityEditGallery() {

    var activity_id = $('#activity_id').val();
    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        url: '/admin/attivita/get_images',
        type: 'POST',
        data: {
            activity_id: activity_id,
            _token: token
        },
        success: function(data) {

            $('#images-container').html(data.gallery_partial);
            $('#image-picker-select').html(data.image_picker_select);
            $("#featured_image_id_field").imagepicker({
                limit: 1
            });
            doMagnificPopup();


            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;

}

$("#featured").change(function() {

    if (this.checked) {
        $('#gallery-modal').modal('show');
    }
});

$("#selected_image_preview").click(function() {

    $('#gallery-modal').modal('show');
});

$(document).on('click', '#confirm_featured_image', function() {

    var value = $("#featured_image_id_field").data("picker").selected_values()

    var img = $('#featured_image_id_field option[value="' + value + '"]').data('img-src');

    // console.log('insert');

    $('#selected_image_preview').html('<img style="width:50px" src="' + img + '">');
    $('#featured_image_id').val(value);

});



$(document).on('click', '.delete-media', function() {

    var id = $(this).data('id');
    var persisted_id = $('#featured_image_persisted').val();

    // console

    if (id == persisted_id) {
        alert("Impossibile rimuovere questa immagine perchè è impostata come Featured In Slide");
        return false;
    } else {
        var c = confirm("Sei sicuro di voler rimuove permanentemente quest'immagine?");

        if (c) {


            $('#media_option_' + id).remove();
            $('#media_gallery_' + id).remove();

            $("#featured_image_id_field").imagepicker({
                limit: 1
            });

            deleteImage(id);
        }
    }

});

function deleteImage(id) {

    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        url: '/admin/attivita/' + id + '/delete_image',
        type: 'POST',
        data: {
            image_id: id,
            _method: 'DELETE',
            _token: token
        },
        success: function(data) {
            doMagnificPopup();
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });
    redoMagnificPopup();
    return false;

}

function redoMagnificPopup () {
    $('.gallery-item').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
    }

$('#press_deletion_form').submit(function() {
    var c = confirm("Sei sicuro di volere cancellare permanenetemente questa attività?");
    return c; 
});

$('#staff_deletion_form').submit(function() {
    var c = confirm("Sei sicuro di volere cancellare permanenetemente questo membro team?");
    return c; 
});

