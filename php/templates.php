<?php 


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
		  				<form method="get" action="php/formularios.php">
		  					<input type="hidden" name="formulario" style="display:none" value="cadastro">
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

?>