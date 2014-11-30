var app = (function(){
	
	function iniciar(){
		logar();
		buscar();
		carrossel();
		painel();
	}

	function logar(){
		$('.form-login-submit').click(function(){
			$('.form-login').submit();
		});

		$('.form-login-logout').click(function(){
			alert('bye');
			location.href="index.php?logout=true";
		});
	}

	function buscar(){
		$('.btn-buscar').click(function(){
			alert('pesquisando...');
		});
	}


	function painel(){
		$('.item-op').click(function(){
			$('.opcoes-sub',this).toggleClass('visivel');
		});

		$('.categorias-listar').click(function(){
			$.ajax({
				url: 'php/banco.php?escondido=listar-categorias', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});
		});


		$('.categorias-cadastrar').click(function(){
			$.ajax({
				url: 'php/templates.php?p=cadastro-categorias', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});
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