var app = (function(){
	
	function iniciar(){
		logar();
		buscar();
		carrossel();
	}

	function logar(){
		$('.form-login-submit').click(function(){
			alert('logando...');
		});
	}

	function buscar(){
		$('.btn-buscar').click(function(){
			alert('pesquisando...');
		});
	}

	function carrossel(){
		$("#owl-demo").owlCarousel({
			
			autoPlay 		: 3000,
			navigation 		: true, // Show next and prev buttons
			slideSpeed 		: 300,
			paginationSpeed : 400,
			singleItem		: true

			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false

		});
	}


	return{
		iniciar : iniciar
	}

})();

$(document).ready(app.iniciar);