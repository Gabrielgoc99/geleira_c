<?php
	require_once 'conexao.php';
	session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: portal-funcionario.php');
	endif;

	$id = $_SESSION['id'];
	$sql = "SELECT * FROM funcionario WHERE matricula = '$id'";
	$resultado = mysqli_query($mysqli, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($mysqli);
?>


<!DOCTYPE html>
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
		
			<p>Bem vindo, <b><?php echo $dados['nome']; ?> </b>. Escolha a operação que deseja executar:</p>
			<a href="logout.php">Sair</a>			
	</div>
	
	<div>
		<a class="btn btn-primary" href="formularioFuncionario.php" role="button" style="width: 500px; height: 100px; margin-top: 10px; display: flex;
		justify-content: center; align-items: center;">Gerenciar Funcionários</a>
	</div>
	<div>
		<a class="btn btn-primary" href="formularioProduto.php" role="button" style="width: 500px; height: 100px; margin-top: 10px; display: flex;
		justify-content: center; align-items: center;">Gerenciar Produtos</a>
	</div>
	<div>
		<a class="btn btn-primary" href="formularioVenda.php" role="button" style="width: 500px; height: 100px; margin-top: 10px; display: flex;
		justify-content: center; align-items: center;">Gerenciar Vendas</a>
	</div>
		

	<div class="rodape">
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