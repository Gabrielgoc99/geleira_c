<!DOCTYPE html> 

<?php

include 'conexao.php';
session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: portal-funcionario.php');
  endif;
  
  

$consulta = "SELECT * FROM funcionario";
$connection = $mysqli->query($consulta) or die ($mysqli->error);

?>

<style>
    
</style>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>Lista de Funcionários</title>
        
        
    </head>
    <center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>
    <body>
      <center>
    <table class="table table-striped" style="width: 60rem;">
  <thead>
    <tr>
      
      <th scope="col">Matrícula</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  </center>
  <tbody>
  
        <?php while($dado = $connection->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['matricula']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo $dado['cpf']; ?></td> 
          <td><?php echo $dado['telefone']; ?></td>
          <td><?php echo date('d/m/Y', strtotime($dado['dataNascimento'])); ?></td> 
          <td><?php echo $dado['usuario']; ?></td>
          <td><?php echo $dado['senha']; ?></td>
          <td> 
          <a href="<?php echo "editarFuncionario.php?matricula=" . $dado['matricula']?>" >Editar</a><br><hr>
			    <a href="<?php echo "excluirFuncionario.php?matricula=" . $dado['matricula']?>" >Apagar</a><br><hr>
            
          </td> 
          
        </tr> 
        <?php } ?> 
          
  </tbody>

  <a href="formularioFuncionario.php" style="position:relative; margin-top: 10px; margin-bottom: 10px; text-align:center;" class="btn btn-primary">Voltar </a>
                <span id="error_message" class ="text-danger"></span>
                <span id="success_message" class ="text-success"></span>  

        
                
        
        
        </body>
    </html>