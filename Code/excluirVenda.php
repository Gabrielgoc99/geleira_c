<?php

include 'conexao.php';
$ID_Venda = filter_input(INPUT_GET, 'ID_Venda');

$connection = mysqli_connect("localhost", "root", "", "geleira_c");

if($connection){
    $query = mysqli_query($connection, "DELETE FROM venda WHERE ID_Venda ='$ID_Venda'");
    if($query){
        echo "Exclusão executada!";
        header("Location: exibicaoVenda.php");
    }else{
        die("Erro: ". mysqli_error($connection));
    }
}else{
    die("Erro: ". mysqli_error($connection));
}
