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

// Botão Whats
// var displayWhats = document.getElementById("whatswidget-conversation").style.display = "none";
// var opacityWhats = document.getElementById("whatswidget-conversation").style.opacity = "0";

// var button = document.getElementById("whatswidget-button");
// button.addEventListener("click", openChat);

// var conversationMessageOuter = document.getElementById("whatswidget-conversation-message-outer");
// conversationMessageOuter.addEventListener("click", openChat);

// var chatOpen = !1;
// function openChat() { 0 == chatOpen ? (displayWhats = "block", opacityWhats = 100, chatOpen = !0, conversationMessageOuter.style.display = "none") : (opacityWhats = 0, displayWhats = "none", chatOpen = !1) }
