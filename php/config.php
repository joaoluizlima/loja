<?php 

$server = "localhost";
$user = "usuario_teste";
$password = "usuario_teste";
$bd = "loja";

$conexao = mysqli_connect($server, $user, $password, $bd) or die("Problemas para conectar no banco. Verifique os dados!");

?>