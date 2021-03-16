<?php

require_once 'conexao.php';

if(isset($_POST['btn'])):
    $cep = mysqli_scape_string($connect, $_POST['cep']);
    $uf = mysqli_scape_string($connect, $_POST['uf']);
    $cidade = mysqli_scape_string($connect, $_POST['cidade']);
    $logradouro = mysqli_scape_string($connect, $_POST['logradouro']);
    $numero = mysqli_scape_string($connect, $_POST['numero']);
    $bairro = mysqli_scape_string($connect, $_POST['bairro']);

    //inserindo os dados no banco
$sql = "INSERT INTO usuario (cep, uf, cidade, logradouro, numero, bairro) VALUES ('$cep','$uf','$cidade','$logradouro','$numero','$bairro')";
   
   if(mysqli_query($connect, $sql)):
    ('Location: ../index.php?sucesso');
   else:
    ('Location: ../index.php?error');
   endif;
endif;