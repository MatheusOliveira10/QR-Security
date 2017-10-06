$(document).ready(function () {
	// Adicioniar código aqui! 

	$('.vegas-slider').vegas({
		transition: 'fade', // transição dos slides
		slides: [
			{src : '../images/info.jpg'},
			{src : '../images/cubinhos.jpg'},
			{src : '../images/poste.jpg'},
			{src : '../images/info2.jpg'},
			{src : '../images/folha.jpg'}
		]
	});


});