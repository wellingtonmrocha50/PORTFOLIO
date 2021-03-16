 <?php
 //conexao
 include_once 'php_action/db_connect.php';
 //header topo da pagina
 include_once 'include/header.php';
 //MENSAGEM
 include_once 'include/mensagem.php';
 ?>

 <!--CRIAÇÃO DA TABELA DO SISTEMA-->
<div class="row">
  <div class="col s12 m6 push-m3">
<h3 class="light">CLIENTES</h3>
	<!--CLASSE STRIPED DEIXA A TABELA ZEBRADA-->
  	<table class="striped">
  		<thead>
  			<tr>
  				<th>Nome</th>
  				<th>Sobrenome</th>
  				<th>Idade</th>
  				<th>Email</th>
  				<th>Telefone</th>	
  			</tr>
  		</thead>
  	<tbody>
  		<?php
  			$sql = "SELECT * FROM usuarios";
  			$resultado = mysqli_query($connect, $sql);

      if(mysqli_num_rows($resultado)> 0):
  			// LOOP NA TABELA
  		while($dados = mysqli_fetch_array($resultado)):
  			?>
  			<tr>
  			<td><?php echo $dados['nome'];?></td>
  			<td><?php echo $dados['sobrenome'];?></td>
  			<td><?php echo $dados['idade'];?></td>
  			<td><?php echo $dados['email'];?></td>
  			<td><?php echo $dados['telefone'];?></td>

  		<!--BOTAO EDITAR E DELETAR -->
<td><a href="editar.php?id=<?php echo $dados['id'];?>"class="btn-floating green"><i class="material-icons">edit</i></a></td>
<td><a href="#modal<?php echo $dados['id'];?>"class="btn-floating purple modal-trigger"><i class="material-icons">delete</i></a></td>

      <!-- Modal Structure -->
  <div id="modal<?php echo $dados['id'];?>" class="modal">
    <div class="modal-content">
      <h4>olá</h4>
      <p>Tem certeza que deseja excluir?</p>
    </div>
    <div class="modal-footer">
      <!-- ACAO DELETAR-->
      <form action="php_action/delete.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <button type="submit" name="btn-deletar" class="btn red">Sim,Excluir!</button>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat ">Cancelar</a>

      </form>
    </div>
  </div>
  		</tr>
  	<?php
     endwhile;
   else:
    ?>
  <tr>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
    <td>-</td>
  </tr>
<?php
  endif;
     ?>
    
  </tbody>
  	</table>
<br>
<!--BOTÃO ADICIONAR CLIENTES-->
<a href="adicionar.php" class="btn">Adicionar cliente</a>

<?php
include_once 'include/footer.php';
?>
