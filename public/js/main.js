
$('.gallery-button').click(function(){

    var id = $(this).data('id');

    $('#media_gallery_' + id).find('a').eq(0).trigger('click');

});

