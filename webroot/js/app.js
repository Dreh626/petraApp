const hamburguer = document.querySelector(".hamburguer");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelector(".nav-links li");

hamburguer.addEventListener("click", () => {
	navLinks.classList.toggle("open");
});

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
