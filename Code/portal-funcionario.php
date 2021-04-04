<?php
require_once 'conexao.php';
session_start();
	
	if(isset($_POST['btn-entrar'])):
		$erros = array();
		$usuario = mysqli_escape_string($mysqli, $_POST['usuario']);
		$senha = mysqli_escape_string($mysqli, $_POST['senha']);

		if(empty($usuario) or empty($senha)):
			$erros[] = '<li> O campo usuario/senha precisa ser preenchido! </li>';
		else:
			$sql = "SELECT usuario FROM funcionario WHERE usuario = '$usuario'";
			$resultado = mysqli_query($mysqli, $sql);

			if(mysqli_num_rows($resultado) > 0):

				$sql = "SELECT * FROM funcionario WHERE usuario = '$usuario' AND senha = '$senha'";
				$resultado = mysqli_query($mysqli, $sql);

					if(mysqli_num_rows($resultado) == 1):

						$dados = mysqli_fetch_array($resultado);
						$_SESSION['logado'] = true;
						$_SESSION['id'] = $dados['matricula'];
						header('Location: portal-funcionarios-produtos.php');

					else:
						$erros[] = "<li> Usuario e senha não conferem! </li>";
					endif;
		

			else:
				$erros[] = "<li> Usuário Inexistente </li>";
			endif;
	endif;

endif;
?>

<!DOCTYPE html>

<style>
    h2 {font-family:serif-serif; alignment-baseline: central; color: #000033; vertical-align: middle; text-align: center;}
    form {width: 350px; background-color:#00A4CD ; margin: 10px auto; padding: 10px;}
    p{font: 15px "Trebuchet MS", Arial, Helvetice, sans-serif; color: #000033; padding: 3px; padding-left: 10px;}
    input{width: 300px; padding: 5px; border: none; font: 15px "Trebuchet MS", Arial, Helvetice, sans-serif; display: block; 
          color: #000033; border-radius: 5px;}
    button{width: 200px; color:whitesmoke; background-color: #000033; padding: 5px; font: 15px "Trebuchet MS", Arial, Helvetice, 
               sans-serif;  border-radius: 5px; text-align: center; }
    .botao{text-align: center;}


</style>


<html>
<head>
	<title>Geleira Climatização</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
<center>
		<a href="index.html" style="text-align: center;"> <img src="img\9b4eb020-d7ca-4b31-9505-70622957b28f_200x200.png"></a>
		</center>

	<div class="botao">		
		<a class="btn btn-primary" href="index.html" role="button" style="width: 180px;">Home</a>
		<a class="btn btn-primary" href="produtos.html" role="button" style="width: 180px;">Produtos</a>
		<a class="btn btn-primary" href="empresa.html" role="button" style="width: 180px;">A Empresa</a>
		<a class="btn btn-primary" href="portal-funcionario.php" role="button" style="width: 180px;">Portal do Funcionário</a>
	</div>
	<center>
		<div class="cadastro_fun">
			<p>Bem vindo ao portal do funcionário. Por favor, entre com suas credenciais:</p>
		</div>

		<h1> Login </h1>
<?php
if(!empty($erros)):
	foreach($erros as $erro):
		echo $erro;
	endforeach;
endif;
?>
<hr>

<center>
		<form action="" method="POST">
			
			<b>Usuario: </b> <input type="text" name="usuario" style="margin-top: 20px; margin-left:auto; margin-right:auto;" placeholder="Digite seu Usuário"><br>
			<b>Senha: </b><input type="password" name="senha" style="margin-top: 20px; margin-left:auto; margin-right:auto; position:-ms-page" placeholder="Digite sua Senha"><br>
			<button type="submit" name="btn-entrar" class="btn btn-primary" style="margin-top: 30px; width:150px"> Entrar </button>
			
		</form>
		</center>
		
		<div class="rodape" style="margin-top: 30px;">
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
			<div"><b> Todos direitos reservados DEVCORP © 2020</b></div>
		</div>
	</center>



</body>
</html>