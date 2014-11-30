<?php 
	
  	session_start();

  	if(isset($_GET['acao'])) {
  		$acao = $_GET['acao'];
  		echo "<span class='acao'>".$acao."</span>";
  	}


  	if(isset($_GET['logout'])){

  		if($_GET['logout'] == 'true'){
	  		//Limpa
		   	unset ($_SESSION['login']);
		    unset ($_SESSION['id']);
		    unset ($_SESSION['nome']);
		    unset ($_SESSION['tipo']);	 

		    //Destrói
		    session_destroy();
		    header('location:index.php');
  		}

  	}

  	if(isset($_SESSION['login']) &&  isset($_SESSION['id']) ){
  		echo 'login: '.$_SESSION['login'];
  		echo '<br>id: '.$_SESSION['id'];
  		echo '<br>nome: '.$_SESSION['nome'];
  		echo '<br>tipo: '.$_SESSION['tipo'];
  	}

	// controle de rotas e sessão
	$p = $_GET['p'];
	$html = '';
	$form_or_name;

	include('php/templates.php');

	if(!isset($_SESSION['login']) && !isset($_SESSION['id'])){
		echo "nao esta logado";
		$form_or_name = form_login();
		if(!isset($p)){
			// está na capa
			$html = conteudo_capa();
		}
		else{
			switch ($p) {
				case 'cadastrese':
					include('php/banco.php');
					$html = form_cadastro_clientes();
					echo "<span class='echo_php'>cadastro</span><br>";
					break;				
				default:
					$html = conteudo_capa(); // demais valores para p
					break;
			}
		}
	}
	else{ // logado
		$form_or_name = name_logout();

		$tipo = $_SESSION['tipo'];

		if($tipo == 'cliente'){
			if(!isset($p)){
			// está na capa
			$html = conteudo_capa();
			}
			else{
				switch ($p) {
					case '':				
						break;				
					default:
						$html = conteudo_capa(); // demais valores para p
						break;
				}
			}
		}
		else // admin
		{
			if(!isset($p)){
				// está na capa
				$html = painel();
			}
			else{
				switch ($p) {
					case '':				
						break;				
					default:
						$html = painel(); // demais valores para p
						break;
				}
			}
		}
		
	} // logado


?>

 <!DOCTYPE HTML>
  <html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<link rel="icon" href="imagens/favicon.ico" type="image/x-icon" />
  	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  	<!-- este site usa Font Awesome by Dave Gandy - http://fontawesome.io -->
	<link rel="stylesheet" href="fontes/font-awesome-4.2.0/css/font-awesome.min.css"/>
	<!-- este site usa Font Awesome by Dave Gandy - http://fontawesome.io -->

	<!-- JQuery local -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- JQuery local fim  -->

	<!-- scripts js -->
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/ajudantes.js"></script>
	<!-- scripts js fim -->

	<!-- owl carousel -->
	<link rel="stylesheet" type="text/css" href="js/owl.carousel/owl-carousel/owl.carousel.css" />	
	<link rel="stylesheet" href="js/owl.carousel/owl-carousel/owl.theme.css" />
	<script type="text/javascript" src="js/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<!-- owl carousel fim -->



  	<title>Loja</title>
  </head>
  <body>
  	<!-- tudo -->
  	<div class="tudo">
  		<!-- container -->
  		<div class="container">

  			<div class="login-topo">
  				<!-- login -->
  				<div class="login">  					
  					<!-- form login -->
		  			<?php 
		  				echo $form_or_name;
		  			?>
		  			<!-- form login fim -->
		  		</div>
		  		<!-- login fim -->
		  		<!-- topo -->
		  		<div class="topo">  	
		  			<a href="?"><img src="imagens/logo.jpg"></a>
		  		</div>
		  		<!-- topo fim -->
  			</div>
	  	   

	  		<div class="menu">
	  			<ul>
	  				<li><a href="">Home</a></li>
	  				<li><a href="">Produtos</a></li>
	  				<li><a href="">Categorias</a></li>
	  				<li><a href="">Parceiros</a></li>
	  				<li><a href="">Quem somos</a></li>
	  				<li><a href="">Contato</a></li>  			
	  			</ul>
	  		</div>
	  		
	  		<!-- conteudo -->
	  		<div class="conteudo">
		  		<?php
		  			echo $html;
		  		?>
		  		
	  		</div>
	  		<!-- conteudo fim -->	
  		</div>
  		<!-- container fim -->  
  		<!-- rodape -->
		<footer class="rodape-creditos">
			<p>Manaus / 2014</p>
		</footer>
		<!-- rodape fim -->		
  	</div>
  	<!-- fim tudo -->
	
  		

  </body>
</html>