/*--------------------------------------------
  Le carrousel de la Vie étudiante
----------------------------------------------*/


const swiper = new Swiper('.swiper .accueil-vie', {
	// Optional parameters
	direction: 'vertical',
	loop: true,
  
	// If we need pagination
	pagination: {
	  el: '.swiper-pagination',
	},
  
	// Navigation arrows
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
  
	// And if we need scrollbar
	scrollbar: {
	  el: '.swiper-scrollbar',
	},
  });