<?php
require_once 'conexao.php';

?>


<html>   
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>Cadastro de Venda</title>
    </head>
    <body>

    <center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>

        <div class = "container">
            <div class="row">
        <?php
        
            
        
        
             
        $Funcionario_Matricula =  $_POST['Funcionario_Matricula'];
        $Cod_Produto =  $_POST['Cod_Produto'];
        $Data_Venda =  $_POST['Data_Venda'];
        $Nome_Cliente =  $_POST['Nome_Cliente'];
        $Valor_Venda =  $_POST['Valor_Venda'];
        
        
        $sqlVenda = "INSERT INTO `venda` (`ID_Venda`, `Funcionario_Matricula`, `Cod_Produto`, `Data_Venda`, `Nome_Cliente`, `Valor_Venda`) 
        VALUES (NULL, '$Funcionario_Matricula', '$Cod_Produto', '$Data_Venda', '$Nome_Cliente', '$Valor_Venda')";
        
        if(mysqli_query($mysqli, $sqlVenda)){
            echo "Cadastro Realizado!";
            header('Location: formularioVenda.php');
        } else {
            echo "Erro!";
        }

        ?>
        <center>
        <a href="formularioVenda.php" class="btn btn-primary">Voltar </a>
        </center>
        </div>
        
    </body>
</html>
