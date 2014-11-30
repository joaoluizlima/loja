<?php 

$pAjax = $_GET['p'];

if($pAjax == 'cadastro-categorias'){
	$form = form_cadastro_categorias();
	echo $form;
}

// retorna o carrosel e a div contendo as categorias, produtos e um form de busca
function conteudo_capa(){
	
	  	return	'<!-- cabecalho -->
	  			<div class="cabecalho">  	
					<div id="owl-demo" class="owl-carousel owl-theme">
					 
					  <div class="item"><img src="imagens/fullimage1.jpg" alt="The Last of us"></div>
					  <div class="item"><img src="imagens/fullimage2.jpg" alt="GTA V"></div>
					  <div class="item"><img src="imagens/fullimage3.jpg" alt="Mirror Edge"></div>
					 
					</div>
		  		</div>
		  		<!-- cabecalho fim -->
		  		<!-- categorias-produtos -->
				<div class="categorias-produtos">  	
					<form class="form-topo">
		  				<input type="text" class="input-busca" placeholder="pesquise por nomes de produtos">
		  				<div class="busca-topo">
		  					<i class="fa fa-search"></i>
		  					<span class="btn-buscar">buscar</span>
		  				</div>
		  			</form>
					<div class="categorias">  	
						<h1>Categorias</h1>
						<ul>
			  				<li><a href="#">Eletrônicos</a></li>
			  				<li><a href="#">Eletrodomésticos</a></li>
			  				<li><a href="#">Informática</a></li>
			  				<li><a href="#">Livros</a></li>
			  				<li><a href="#">Brinquedos</a></li>
			  				<li><a href="#">Saúde e Beleza</a></li>
			  				<li><a href="#">Escritório</a></li>
			  				<li><a href="#">Esporte e Lazer</a></li>
			  				<li><a href="#">Relógios</a></li>
		  				</ul>
		  			</div>
		  			<div class="produtos"> 
		  			  	<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>				  	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>	
			  			<div class="box-produto">
			  				<a href="#">
			  					<img src="imagens/foto-produto.jpg">
				  				<h1>Livro xxx</h1>
				  				<p>$60</p>
			  				</a>		  				
			  			</div>		 
		  			</div>
		  		</div>	  
		  		<!-- categorias-produtos fim -->';
}


function form_cadastro_clientes(){
		return '<div class="form-cadastro-clientes">
					<fieldset>
		  				<legend>Castastro de Clientes</legend>
		  				<form method="get" action="php/banco.php">
		  					<input type="hidden" name="escondido" style="display:none" value="cadastro">
		  					<table>
		  						<tr> 
		  							<td>
		  								<label>Nome: </label>
		  							</td>
		  							<td>
		  								<input type="text" name="nome">
		  							</td>
		  						</tr>
		  						<tr>
		  							<td>
		  								<label>E-mail: </label>
		  							</td>
		  							<td>
		  								<input type="text" name="email"> <!-- depois trocar para type="email" -->
		  							</td>
		  						</tr>
		  						<tr>
		  							<td>
		  								<label>Senha: </label>
		  							</td>
		  							<td>
		  								<input type="password" name="senha">
		  							</td>
		  						</tr>
		  						<tr>
		  							<td>
		  								<label>Telefone: </label>
		  							</td>
		  							<td>
		  								<input type="text" name="telefone">
		  							</td>
		  						</tr>
		  						<tr>
		  							<td>
		  								<input type="submit" value="enviar">
		  							</td>
		  							
		  						</tr>
		  					</table>
		  				</form>
		  			</fieldset>		  			
		  		</div>';
}



function form_login(){
	return '<a href="?p=cadastrese" class="cadastre-se">Cadastre-se</a>
				<form action="php/banco.php" method="get" class="form-login">
		  				<input type="hidden" name="escondido" value="login">
		  				<input type="text" name="email" placeholder="email">
		  				<input type="password" name="senha" placeholder="senha">
		  				<div class="form-login-submit">
		  					<i class="fa fa-sign-in"></i>
		  					<span>entrar</span>
		  				</div>
		  				<input type="submit" style="display:none">
		  			</form>';
}

function name_logout(){
	return '
	<style>.login{ width:30% !important; float: right }
	</style>
	<div class="name_id">
		<p>'.$_SESSION['nome'].'</p>
		<p>'.$_SESSION['login'].'</p>
	</div>
			<div class="form-login-logout">
				<i class="fa fa-sign-out"></i>
				<span>sair</span>
			</div>';
}


function painel(){

	return '<style>.menu{ display:none } </style>
			<h1 id="titulo-painel">Administração da loja</h1>
			<div class="painel">
				<div class="coluna-opcoes">
					<div class="pesquisa-admin">
						<form class="form-topo form-admin">
			  				<input type="text" class="input-busca" placeholder="produtos...">
			  				<div class="busca-topo">
			  					<i class="fa fa-search"></i>
			  					<span class="btn-buscar">buscar</span>
			  				</div>
			  			</form>
					</div>
					<div class="opcoes">
						<div class="item-op op-compras">
							<i class="fa fa-shopping-cart"></i>
							Compras
						</div>
						<div class="item-op op-produtos">
							<i class="fa fa-cube"></i>
							Produtos
							<!-- opcoes sub -->
							<div class="opcoes-sub">
								<div class="sub-item-op">
									<i class="fa fa-angle-right produtos-listar"></i> Listar
								</div>
								<div class="sub-item-op">
									<i class="fa fa-angle-right produtos-listar"></i> Cadastrar
								</div>
							</div>
							<!-- opcoes sub fim -->
						</div>

						<div class="item-op op-categorias">
							<i class="fa fa-folder-open"></i>
							Categorias
							<!-- opcoes sub -->
							<div class="opcoes-sub">
								<div class="sub-item-op categorias-listar">
									<i class="fa fa-angle-right"></i> Listar
								</div>
								<div class="sub-item-op categorias-cadastrar">
									<i class="fa fa-angle-right"></i> Cadastrar
								</div>
							</div>
							<!-- opcoes sub fim -->
						</div>
						<div class="item-op op-clientes">
							<i class="fa fa-users"></i>
							Clientes
						</div>
						<div class="item-op op-contatos">
							<i class="fa fa-phone-square"></i>
							Contatos
						</div>
					</div>
				</div>
				<div class="coluna-conteudo">
					
				</div>
			</div>';
}


function form_cadastro_categorias(){


	return '<div class="form-cadastro-clientes form-cadastro-categorias">
			<fieldset>
				<legend>Castastro de Categorias</legend>
				<form method="get" action="php/banco.php">
					<input type="hidden" name="escondido" style="display:none" value="cadastro">
					<table>
						<tbody><tr> 
							<td>
								<label>Nome: </label>
							</td>
							<td>
								<input type="text" name="nome">
							</td>
						</tr>
						<tr>
							<td>
								<label>Descrição: </label>
							</td>
							<td>
								<input type="text" name="descricao">
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								<input type="submit" value="enviar">
							</td>
							
						</tr>
					</tbody></table>
				</form>
			</fieldset>		  			
		</div>';
}


?>