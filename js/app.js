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

		// utilizado para ir para listagem de categorias após cadastrar uma categoria
		var acao = $('.acao').html();
		if(acao == 'categorias-listar'){
			$.ajax({
				url: 'php/banco.php?escondido=listar-categorias', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});
			
		}

		// deixa sublista dos itens painel visível
		$('.item-op').click(function(){
			$('.opcoes-sub',this).toggleClass('visivel');
		});

		// retorna o html contendo uma tabela com as categorias e os botoes de editar e excluir
		$('.categorias-listar').click(function(){
			$.ajax({
				url: 'php/banco.php?escondido=listar-categorias', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});
		});

		// envia para pagina templates.php retornar o form de cadastro
		$('.categorias-cadastrar').click(function(){
			$.ajax({
				url: 'php/templates.php?p=cadastro-categorias', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});
		});

		// envia para pagina banco.php retornar o form de cadastro
		$('#btn-deletar').click(function(){
	
			

		


			/*
			$.ajax({
				url: 'php/banco.php?escondido=deletar&alvo=', success: function(data) {
					$('.coluna-conteudo').html(data);
				}
			});

			*/
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