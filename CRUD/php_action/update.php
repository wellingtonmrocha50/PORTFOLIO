<?php
// INICIANDO A SESSÂO
session_start();
//conexao com a tabela no banco de dados

require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);

	$id = mysqli_escape_string($connect, $_POST['id']);


$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', idade = '$idade', email = '$email', telefone = '$telefone' WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
	$_SESSION['mensagem'] = "Atualizado com sucesso!";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = " Erro ao Atualizar!";
	header('Location: ../index.php?');
	endif;
endif;