$(document).on('click', '.gallery-button', function() {

	var id = $(this).data('id');

	$(document).find('#media_gallery_' + id).find('a').eq(0).trigger('click');

});

$('.item').click(function() {

	var url = $(this).data('url');
	var navbar_height = parseInt($('.navbar').css('height').replace('px', ''));

    animate_scroll(url, navbar_height, 25);

});

function animate_scroll (element, variable, offset) {
    $('html, body').stop().animate({
        scrollTop: $(element).offset().top - variable - offset
    }, 600);
}

$(document).on('click', '.activity-expander', function(){

	var id = $(this).data('id');

	var parent = $(this).parent();	

	var paragraph = $(this).parent().find('p');	

	var full_text_obj = $(this).parent().find('.full-text');	
    var full_text = $(full_text_obj).text(); 
	var full_text_height = $(full_text_obj).height();	

	var truncated_text_obj = $(this).parent().find('.truncated-text');	
	var truncated_text = $(truncated_text_obj).text();   
	var truncated_text_height = $(truncated_text_obj).height();	

	if($(paragraph).hasClass('truncated'))
	{
		$(paragraph).animate({'height': full_text_height}, function(){
            $(paragraph).html(full_text);
        });
        $(paragraph).css('margin-bottom', '60px');

		$(paragraph).removeClass('truncated');
		$(this).text('Chiudi');

	}else {

        $(paragraph).animate({'height': truncated_text_height}, function(){
            $(paragraph).html(truncated_text);
        });

        $(paragraph).css('margin-bottom', '30px');

		$(paragraph).addClass('truncated');
		$(this).text('Leggi di più');
	}

});

$(document).on('click', '.load-more-activities', function(){

	var url = $(document).find('#load-more-activities-url').text();
	getActivities(url);

});

function getActivities (url) {

    var last_activity = $('.attivita').last();
    var navbar_height = parseInt($('.navbar').css('height').replace('px', ''));

    console.log(last_activity);

    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {

            $('.activities-container').append(data.layout);
            $('.hidden-galleries').append(data.galleries);
            $(document).find('#load-more-activities-url').text(data.url);

            var next_activity = $(last_activity).next();

            animate_scroll(next_activity, navbar_height, 25);

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

