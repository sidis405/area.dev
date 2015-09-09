$('.gallery-button').click(function() {

	var id = $(this).data('id');

	$('#media_gallery_' + id).find('a').eq(0).trigger('click');

});

$('.item').click(function() {

	var url = $(this).data('url');
	var navbar_height = parseInt($('.navbar').css('height').replace('px', ''));

	$('html, body').stop().animate({
		scrollTop: $(url).offset().top - navbar_height - 25
	}, 600);

});