<?php
// INICIANDO A SESSÂO
session_start();
//conexao com a tabela no banco de dados

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$telefone = mysqli_escape_string($connect, $_POST['telefone']);

	$id = mysqli_escape_string($connect, $_POST['id']);


$sql = "DELETE FROM usuarios  WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
	$_SESSION['mensagem'] = "Excluido com sucesso!";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = " Erro ao Excluir!";
	header('Location: ../index.php?');
	endif;
endif;