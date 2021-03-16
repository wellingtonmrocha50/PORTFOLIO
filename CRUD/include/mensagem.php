<?php
// abrindo sessao
 session_start();
 if(isset($_SESSION['mensagem'])):

 ?>
 
 <!--CODIGO DE ALERTA DE MENSAGEM-->
<script>
 	window.onload = function() {
 	M.toast({html:'<?php echo $_SESSION['mensagem'];?>'});
};
 </script>

  <?php
 endif;
 // LIMPA A SESSÂO
 session_unset();
 ?>
 