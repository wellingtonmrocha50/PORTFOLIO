 <?php
 //conexao
 include_once 'php_action/db_connect.php';
 include_once 'include/header.php';
 // select
 if(isset($_GET['id'])):
   $id =mysqli_escape_string($connect, $_GET['id']);
   $sql = "SELECT * FROM usuarios WHERE id = '$id'";
   $resultado = mysqli_query($connect , $sql);
   $dados = mysqli_fetch_array($resultado);
  endif;
 ?>

 <!--CRIAÇÃO DO FORMULARIO DO SISTEMA-->
    <div class="row">
      <div class="col s12 m6 push-m3">
          <h3 class="light">EDITAR CLIENTES</h3>
        <form action="php_action/update.php" method="POST">
            <input type="hidden" name="id" value ="<?php echo $dados['id'];?>">

        <!-- INPUT-FIELD MANTEM A ESTRUTURA DO MATERIALIZE-->
      <div class="input-field col s12">
  <input type="text" name="nome" id="nome" value ="<?php echo $dados['nome'];?>">
    <label for="nome">NOME</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="sobrenome"value ="<?php echo $dados['sobrenome'];?>" id="sobrenome">
    <label for="nome">SOBRENOME</label>
  </div>

      <div class="input-field col s12">
  <input type="text" name="idade" value ="<?php echo $dados['idade'];?>" id="idade">
    <label for="nome">IDADE</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="email" value ="<?php echo $dados['email'];?>" id="email">
    <label for="nome">E_mail</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="telefone" value ="<?php echo $dados['telefone'];?>"id="telefone">  
    <label for="nome">TELEFONE</label>
  </div>

      <!--BOTAO CADASTRAR-->
      <button type="submit" name="btn-editar" class="btn">Atualizar</button>
      <!--LINK CADASTRAR-->
      <a href="index.php"class="btn purple">Lista De Clientes</a>
</form>
  </div>
    </div>
<?php
include_once 'include/footer.php';
?>
