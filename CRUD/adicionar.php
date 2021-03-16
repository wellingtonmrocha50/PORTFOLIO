 <?php
 include_once 'include/header.php';
 ?>
 <!--CRIAÇÃO DO FORMULARIO DO SISTEMA-->
    <div class="row">
      <div class="col s12 m6 push-m3">
          <h3 class="light">NOVO CLIENTES</h3>
        <form action="php_action/create.php" method="POST">
        <!-- INPUT-FIELD MANTEM A ESTRUTURA DO MATERIALIZE-->
      <div class="input-field col s12">
  <input type="text" name="nome" id="nome">
    <label for="nome">NOME</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="sobrenome" id="sobrenome">
    <label for="nome">SOBRENOME</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="idade" id="idade">
    <label for="nome">IDADE</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="email" id="email">
    <label for="nome">E_mail</label>
  </div>
      <div class="input-field col s12">
  <input type="text" name="telefone" id="telefone">
    <label for="nome">TELEFONE</label>
  </div>
      <!--BOTAO CADASTRAR-->
      <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
      <!--LINK CADASTRAR-->
      <a href="index.php"class="btn purple">Lista De Clientes</a>
</form>
  </div>
    </div>
<?php
include_once 'include/footer.php';
?>
