$(document).ready(function () {
	// Adicioniar código aqui! 

	$('.vegas-slider').vegas({
		transition: 'fade', // transição dos slides
		slides: [
			{src : '../images/mar.jpg'},
			{src : '../images/poste.jpg'},
			{src : '../images/vegas.jpg'},
			{src : '../images/ceu.jpg'}
		]
	});


});