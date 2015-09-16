// main container margin-top
$(function() {
	if ($(window).width() > 1024) {
		$('.main').css('margin-top', $('.navbar').height()+84);
	} else{
		$('.main').css('margin-top', $('.navbar').height()+20);
	};
});


// team-member read more
$(function() {
	$('.read-more').on('click', function() {
		$(this).parent().find('.team-member-long').slideToggle('300');
    $(this).text(function(i, text){
          return text === "Leggi di più" ? "Chiudi" : "Leggi di più";
    })
	});
});

// Cache selectors
var lastId,
    topMenu = $("header"),
    topMenuHeight = topMenu.outerHeight()+0,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
$('nav').find('a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-120;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 600);
  e.preventDefault();
});

// Shrink header on scroll
  if ($(window).width() > 1023) {
    $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 100){
      $(".navbar-fixed-top").addClass("shrink");      
    }
    else
    {
      $(".navbar-fixed-top").removeClass("shrink");      
    }
  });
  }