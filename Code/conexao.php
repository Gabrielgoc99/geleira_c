<?php

$host = "localhost";
$user = "root";
$password = "";
$bdname = "geleira_c";

$mysqli = new mysqli($host, $user, $password, $bdname);
$conexao = mysqli_connect($host, $user, $password, $bdname) or die ('Não foi possível conectar');

if(!$mysqli = mysqli_connect($host, $user, $password, $bdname)){
    echo "Desconectado!";
} 
