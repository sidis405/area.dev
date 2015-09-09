$(document).on('click', '.gallery-button', function() {

	var id = $(this).data('id');

	$(document).find('#media_gallery_' + id).find('a').eq(0).trigger('click');

});

$('.item').click(function() {

	var url = $(this).data('url');
	var navbar_height = parseInt($('.navbar').css('height').replace('px', ''));

	$('html, body').stop().animate({
		scrollTop: $(url).offset().top - navbar_height - 25
	}, 600);

});

$(document).on('click', '.activity-expander', function(){

	var id = $(this).data('id');

	var parent = $(this).parent();	

	var paragraph = $(this).parent().find('p');	

	var full_text_obj = $(this).parent().find('.full-text');	

	var full_text = $(this).parent().find('.full-text').text();	

	var truncated_text_obj = $(this).parent().find('.truncated-text');	
	
	var truncated_text = $(this).parent().find('.truncated-text').text();	

	if($(paragraph).hasClass('truncated'))
	{
		$(paragraph).html(full_text);
		// $(paragraph).slideDown();
		$(paragraph).removeClass('truncated');
		$(this).text('Chiudi');

	}else {
		$(paragraph).html(truncated_text);
		// $(paragraph).slideUp();
		$(paragraph).addClass('truncated');
		$(this).text('Leggi di più');
	}

});

$(document).on('click', '.load-more-activities', function(){

	var url = $(document).find('#load-more-activities-url').text();
	getActivities(url);

});

function getActivities (url) {

    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {

            $('.activities-container').append(data.layout);
            $('.hidden-galleries').append(data.galleries);
            $(document).find('#load-more-activities-url').text(data.url);


            if(data.more == false)
            {
            	$('.load-more-activities').hide();
            }

            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;


}

