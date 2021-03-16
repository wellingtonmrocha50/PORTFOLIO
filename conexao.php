 
<?php
//conexão com o banco de dados

$servername = "localhost";
$username = "root";
$senha = "";
$db_name = "viacep";

//criando a conexao
$connect = mysqli_connect($servername, $username, $senha, $db_name);

if(mysqli_connect_error()):
    echo "Erro ao Enviar: ".mysqli_connect_error();
endif;

?>
