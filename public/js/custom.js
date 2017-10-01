$(document).ready(function () {
	// Adicioniar código aqui! 

	$('.vegas-slider').vegas({
		transition: ['fade', 'burn', 'zoomIn'], // transição dos slides
		slides: [
			{src : '../images/ceu.jpg'},
			{src : '../images/fundo2.jpg', transition: 'swirlRight2'},
			{src : '../images/estrada.jpg'}
		]
	});


});