<?php
include 'conexao.php';
session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: portal-funcionario.php');
	endif;


$consulta = "SELECT * FROM venda";
$connection = $mysqli->query($consulta) or die ($mysqli->error);

?>

<!DOCTYPE html> 



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

        <title>Lista de Vendas</title>
        
        
        </head>
        <center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>
  <center>
    <body>
    <table class="table table-striped" style="width: 60rem;">
  <thead>
    <tr>
      
      <th scope="col">Código da Venda</th>
      <th scope="col">Matrícula do Funcionário</th>
      <th scope="col">Código do Produto</th>
      <th scope="col">Data da Venda</th>
      <th scope="col">Nome do Cliente</th>
      <th scope="col">Valor da Venda</th>
      
    </tr>
  </thead>
  <tbody>
  
        <?php while($dado = $connection->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['ID_Venda']; ?></td>
          <td><?php echo $dado['Funcionario_Matricula']; ?></td> 
          <td><?php echo $dado['Cod_Produto']; ?></td> 
          <td><?php echo date('d/m/Y', strtotime($dado['Data_Venda'])); ?></td> 
          <td><?php echo $dado['Nome_Cliente']; ?></td>
          <td><?php echo $dado['Valor_Venda']; ?></td>
          <td> 
          
			    <a href="<?php echo "excluirVenda.php?ID_Venda=" . $dado['ID_Venda']?>" >Apagar</a><br><hr>
          </td> 
        </tr> 
        <?php } ?> 

        </tbody>

  <a href="formularioVenda.php" style="position:relative; margin-top: 10px; margin-bottom: 10px; text-align:center;" class="btn btn-primary">Voltar </a>
                <span id="error_message" class ="text-danger"></span>
                <span id="success_message" class ="text-success"></span>  

        
                
        
        
        </body>
    </html>