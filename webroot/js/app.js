jQuery("document").ready(function($) {
	var nav = $('.navbar');
	$(window).scroll(function() {
	  if ($(this).scrollTop() > 500) {
		nav.addClass("menu-edit");
	  } else {
		nav.removeClass("menu-edit");
	  }
	});
  });