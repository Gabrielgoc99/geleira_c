<?php
require_once 'conexao.php';
session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: portal-funcionario.php');
	endif;

?>


<!DOCTYPE html>



<style>
    h2 {font-family:serif-serif; alignment-baseline: central; color: #000033; vertical-align: middle; text-align: center;}
    form {width: 450px; background-color:#00A4CD ; margin: 100px auto; padding: 10px;}
    p{font: 15px "Trebuchet MS", Arial, Helvetice, sans-serif; color: #000033; padding: 3px; padding-left: 10px;}
    input{width: 400px; padding: 5px; border: none; font: 15px "Trebuchet MS", Arial, Helvetice, sans-serif; display: block; 
          color: #000033; border-radius: 5px;}
    button{width: 200px; color:whitesmoke; background-color: #000033; padding: 5px; font: 15px "Trebuchet MS", Arial, Helvetice, 
               sans-serif;  border-radius: 5px; text-align: center; }
    .botao{text-align: center;}


</style>

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
        <form action = "respostaRequisicaoVenda.php" name="formularioVenda" method="POST">
            <h2>Cadastro de Venda</h2>
            
            
            <p> Matricula do Funcionario: <input type="text" name="Funcionario_Matricula" id="Funcionario_Matricula" label="Matricula do Funcionario" maxlength="50"> </p>
            <p> Codigo do Produto: <input type="text" name="Cod_Produto" id="Cod_Produto" label="Codigo do Produto" maxlength="14"> </p>
            <p> Data da Venda: <input type="date" name="Data_Venda" id="Data_Venda" label="Data da Venda"> </p> 
            <p> Nome do Cliente: <input type="text" name="Nome_Cliente" id="Nome_Cliente" label="Nome do Cliente" maxlength="50"> </p>
            <p> Valor da Venda: <input type="text" name="Valor_Venda" id="Valor_Venda" label="Valor da Venda" maxlength="15"> </p>
            
            
           
             <center>  
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" onclick="submit()">Cadastrar</button>
                <span id="error_message" class ="text-danger"></span>
                <span id="success_message" class ="text-success"></span>

                <a href="exibicaoVenda.php" style="margin-top: 10px;" class="btn btn-primary">Listar Vendas</a>
                <span id="error_message" class ="text-danger"></span>
                <span id="success_message" class ="text-success"></span>

                <a href="portal-funcionarios-produtos.php" style="margin-top: 10px;" class="btn btn-primary">Voltar </a>
                <span id="error_message" class ="text-danger"></span>
                <span id="success_message" class ="text-success"></span>
            </div>
            </center> 
        </form>

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

<script>
    $(document).ready(function () {
        $('#cadastrar').click(function () {
            var Funcionario_Matricula = $('#Funcionario_Matricula').val();
            var Cod_Produto = $('#Cod_Produto').val();
            var Data_Venda = $('#Data_Venda').val();
            var Nome_Cliente = $('#Nome_Cliente').val();
            var Valor_Venda = $('#Valor_Venda').val();
            
            if (Funcionario_Matricula == '' || Cod_Produto == '' || Data_Venda == '' || Nome_Cliente == '' || Valor_Venda == '' )
            {
                $('#error_message').html("Campos em branco.").fadeOut(90000);
            }
            else
            {
                $('#error_message').html('');
                $.ajax({
                    url: "respostaRequisicaoFuncionario.php",
                    method: "POST",
                    data: {Funcionario_Matricula: Funcionario_Matricula, Cod_Produto: Cod_Produto, Data_Venda: Data_Venda, Nome_Cliente: Nome_Cliente, Valor_Venda: Valor_Venda},
                    success: function (data) {
                        $("form").trigger("reset");
                        $('#success_message').fadeIn().html(data);
                        setTimeout(function () {
                            $('#success_message').fadeOut("Slow");


                        }, 20000);
                    }
                });
            }
        });
    });

