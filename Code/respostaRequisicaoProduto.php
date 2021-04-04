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

        <title>Cadastro de Produto</title>
    </head>
    <body>

    <center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>

        <div class = "container">
            <div class="row">
        <?php
        
        
        
        $modelo =  $_POST['modelo'];        
        $marca =  $_POST['marca'];
        $valor =  $_POST['valor'];
        
        $sqlProduto = "INSERT INTO `produto` (`codigo`, `modelo`, `marca`, `valor`) 
        VALUES (NULL, '$modelo', '$marca', '$valor')";
        
        if(mysqli_query($mysqli, $sqlProduto)){
            echo "Cadastro Realizado!";
            header('Location: formularioProduto.php');
        } else {
            echo "Erro!";
            header('Location: formularioProduto.php');
        }

        ?>
        <center>
        <a href="formularioProduto.php" class="btn btn-primary">Voltar </a>
        </center>
        </div>
        
        <center>

        <div class="clear" style="margin-top: 50px;">
			<div>
				<span>
					<img src="img\twitter-lite-icone.png" width="30" height="30">
				</span>
				<span>
					<img src="img\facebook.png" width="30" height="30">
				</span>
				<span>
					<img src="img\logoinsta.png" width="30" height="30">
				</span>
				<span>
					<p>Siga-nos nas Redes Sociais!</p>
				</span>
			</div>
			<div><b> Todos direitos reservados DEVCORP © 2020</b></div>
        </div>
        </center> 

    </body>
</html>
