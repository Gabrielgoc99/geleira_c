<?php
session_start();
include_once("conexao.php");

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE funcionario SET nome='$nome', cpf='$cpf', telefone='$telefone' modified=NOW() WHERE matricula='$matricula'";
$resultado_usuario = mysqli_query($connection, $result_usuario);

if(mysqli_affected_rows($connection)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: exibicaoFuncionario.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editarFuncionario.php?matricula=$matricula");
}
