function getImagesForActivityEditGallery() {

    var activity_id = $('#activity_id').val();
    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        url: '/admin/attivita/get_images',
        type: 'POST',
        data: {
            activity_id: activity_id,
            _token : token
        },
        success: function(data) {


            // console.log(data);

            $('.images-container').html(data);


            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;

}

$("#featured").change(function() {

    if(this.checked) {
        $('#gallery-modal').modal('show');
    }
});

$("#selected_image_preview").click(function() {

        $('#gallery-modal').modal('show');
});

$(document).on('click', '#confirm_featured_image', function() {

    var value = $("#featured_image_id").data("picker").selected_values()

    var img = $('#featured_image_id option[value="' + value + '"]').data('img-src');


    $('#selected_image_preview').html('<img src="' + img + '">');

});

