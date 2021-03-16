<?php
// INICIANDO A SESSÂO
session_start();
//conexao com a tabela no banco de dados

require_once 'db_connect.php';

// FUNCAO DE SEGURANCA (CREAR)XSS (CROSS SITE SCRIPTING)
function clear($input){
	global $connect;
	$var = mysqli_escape_string($connect,$input);
// XSS
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$idade = clear($_POST['idade']);
	$email = clear($_POST['email']);
	$telefone =clear($_POST['telefone']);
$sql = "INSERT INTO usuarios(nome,sobrenome,idade,email,telefone) VALUES ('$nome','$sobrenome','$idade','$email','$telefone')";
if(mysqli_query($connect, $sql)):
	$_SESSION['mensagem'] = "Cadastrado com sucesso!";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = " Erro ao Cadastrar!";
	header('Location: ../index.php?');
	endif;
endif;