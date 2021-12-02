/*--------------------------------------------
  Le carrousel de la Vie étudiante
----------------------------------------------*/

swiperVie = new Swiper('.accueil-vie', {

	direction: 'horizontal',
	loop: true,
	spaceBetween: 20,
	centeredSlides : true,
	speed: 700,
  
	pagination: {
	  el: '.accueil-vie .swiper-pagination',
	  type: 'bullets',
	  clickable: true,
	},
  
	// Les boutons de navigation
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},

	breakpoints: {
		// when window width is >= 600px
		600: {
			slidesPerView: 1,
		},
		// when window width is >= 800px
		800: {
			slidesPerView: 3,
		},
	},
  
});
