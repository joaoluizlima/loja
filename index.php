<?php 

	echo "string";
	
	// controle de rotas e sessão

	$p = $_GET['p'];
	$html = '';

	include('php/templates.php');

	if(!isset($usuario) && !isset($usuario)){
		echo "nao esta logado<br>";
		if(!isset($p)){
			// está na capa
			$html = conteudo_capa();
		}
		else{
			switch ($p) {
				case 'cadastrese':
					include('php/config.php');
					$html = form_cadastro_clientes();
					echo "cadastro";

					break;				
				default:
					$html = conteudo_capa(); // demais valores para p
					break;
			}
		}
	}
	else // logado
		echo "LOGADO";


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

	<script type="text/javascript" src="js/app.js"></script>

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
  					<a href="?p=cadastrese" class="cadastre-se">Cadastre-se</a>
		  			<form action="login.php" method="post" class="form-login">
		  				<input type="text" name="email" placeholder="email">
		  				<input type="password" name="login" placeholder="senha">
		  				<div class="form-login-submit">
		  					<i class="fa fa-sign-in"></i>
		  					<span>entrar</span>
		  				</div>
		  			</form>
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
			<p>Design by /Buckethead KFC</p>
		</footer>
		<!-- rodape fim -->		
  	</div>
  	<!-- fim tudo -->
	
  		

  </body>
 </html>
