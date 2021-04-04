<?php

include 'conexao.php';
$matricula = filter_input(INPUT_GET, 'matricula');

$connection = mysqli_connect("localhost", "root", "", "geleira_c");

if($connection){
    $query = mysqli_query($connection, "DELETE FROM funcionario WHERE matricula='$matricula'");
    if($query){
        echo "Exclusão executada!";
        header("Location: exibicaoFuncionario.php");
    }else{
        die("Erro: ". mysqli_error($connection));
    }
}else{
    die("Erro: ". mysqli_error($connection));
}
