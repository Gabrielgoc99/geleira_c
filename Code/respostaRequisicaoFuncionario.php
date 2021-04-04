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

        <title>Cadastro Funcionario</title>
    </head>
        <body>

        <center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>

        <div class = "container">
            <div class="row">
        <?php
        
        
        
        
        
        $nome =  $_POST['nome'];        
        $cpf =  $_POST['cpf'];
        $telefone =  $_POST['telefone'];
        $dataNascimento =  $_POST['dataNascimento'];
        $usuario =  $_POST['usuario'];
        $senha =  $_POST['senha'];
        
        
        $sql = "INSERT INTO `funcionario` (`nome`, `cpf`, `telefone`, `dataNascimento`, `usuario`, `senha`) 
        VALUES ('$nome', '$cpf', '$telefone', '$dataNascimento', '$usuario', '$senha')";
                
         
        
            if(mysqli_query($mysqli, $sql)){
                echo "Cadastro Realizado!";
                header('Location: formularioFuncionario.php');
            } else {
                echo "Erro!";
                header('Location: formularioFuncionario.php');
            }

         ?>
                <center>
                    <a href="formularioFuncionario.php" class="btn btn-primary">Voltar </a>
                </center>
            </div>
        
        </body>
</html>
