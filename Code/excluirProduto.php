<?php

include 'conexao.php';
$codigo = filter_input(INPUT_GET, 'codigo');

$connection = mysqli_connect("localhost", "root", "", "geleira_c");

if($connection){
    $query = mysqli_query($connection, "DELETE FROM produto WHERE codigo='$codigo'");
    if($query){
        header("Location: exibicaoProduto.php");
    }else{
        die("Erro: ". mysqli_error($connection));
    }
}else{
    die("Erro: ". mysqli_error($connection));
}
