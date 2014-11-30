<?php 

$server = "localhost";
$user = "usuario_teste";
$password = "usuario_teste";
$bd = "loja";

$conexao = mysqli_connect($server, $user, $password, $bd) or die("Problemas para conectar no banco. Verifique os dados!");

if(isset($_GET['escondido'])){
	$escondido =  $_GET['escondido'];
	if($escondido == 'cadastro'){
		cadastro_clientes($conexao);
	}
	elseif ($escondido == 'login') {
		login($conexao);
	}
	elseif ($escondido == 'listar-categorias') {
		$categorias = categorias($conexao);
		echo $categorias;
	}
}




function cadastro_clientes($conexao){
	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$senha = $_GET['senha'];
	$telefone = $_GET['telefone'];

	$query = "INSERT INTO Cliente (nome,email,senha,telefone) VALUES ('$nome','$email','$senha','$telefone')";	
	
	mysqli_query($conexao,$query) or die('erro :p');

	echo "O cliente $nome foi cadastrado com sucesso!";
	
}


function login($conexao){
	// as variáveis login e senha recebem os dados digitados na página anterior
	$login = $_GET['email'];
	$senha = $_GET['senha'];
	 

	// VERIFICANDO SE É UM CLIENTE 

	//Comando SQL de verificação de autenticação
	$sql = "SELECT *
	FROM Cliente
	WHERE email = '$login'
	AND senha = '$senha'";
	 
	$resultado = mysqli_query($conexao,$sql) or die ("Erro na seleção da tabela.");
	 
	//Caso consiga logar cria a sessão
	if (mysqli_num_rows ($resultado) > 0) {
	    // session_start inicia a sessão
	    session_start();

	    $query = "SELECT id FROM Cliente WHERE email = '$login'";
	    $result = mysqli_query($query);
	   
	    while ($linha = mysqli_fetch_assoc($resultado)) {
			$id = $linha['id'];
			$nome = $linha['nome'];
		}

	    $_SESSION['login'] = $login;
	    $_SESSION['id'] = $id;
	    $_SESSION['nome'] = $nome;
	    $_SESSION['tipo'] = 'cliente';

	    echo "<script>alert('Bem vindo $nome');</script>";
	    header('location:../index.php');
	} else{

		// VERIFICANDO SE É UM ADMIN 

		//Comando SQL de verificação de autenticação
		$sql = "SELECT *
		FROM Admin
		WHERE email = '$login'
		AND senha = '$senha'";
		 
		$resultado = mysqli_query($conexao,$sql) or die ("Erro na seleção da tabela.");


		//Caso consiga logar cria a sessão
		if (mysqli_num_rows ($resultado) > 0) {
		    // session_start inicia a sessão
		    session_start();

		    $query = "SELECT id FROM Cliente WHERE email = '$login'";
		    $result = mysqli_query($query);
		   
		    while ($linha = mysqli_fetch_assoc($resultado)) {
				$id = $linha['id'];
				$nome = $linha['nome'];
			}

		    $_SESSION['login'] = $login;
		    $_SESSION['id'] = $id;
		    $_SESSION['nome'] = $nome;
		    $_SESSION['tipo'] = 'admin';

		    echo "<script>alert('Bem vindo $nome');</script>";
		    header('location:../index.php');
		} 
		//Caso contrário redireciona para a página de autenticação
		else {

			echo "erro no login";

		    //Limpa
		    unset ($_SESSION['login']);
		    unset ($_SESSION['id']);
		    unset ($_SESSION['nome']);
		    unset ($_SESSION['tipo']);
		 

		    //Destrói
		    session_destroy();

		    //Redireciona para a página de autenticação
		    // header('location:login.php');
		     
		}
	}

	
} // login


function categorias($conexao){
	
	$linhas = '';
	$query = "SELECT * FROM Categoria";

	$resultado = mysqli_query($conexao,$query);	
	// tava assim: $resultado = mysqli_query($query,$conexao);	

	while ($linha = mysqli_fetch_assoc($resultado)) {
		$linhas .= '<tr>
						<td>'.$linha['nome'].'</td>
						<td>'.$linha['descricao'].'</td>
					</tr>';
	}

	$tabela =  '<h1>Categorias</h1>
				<table>					
					<tr>
						<th>Nome</th>
						<th>Descrição</th>
					</tr>
					'.$linhas.'
				</table>';

	return $tabela;
}


?>