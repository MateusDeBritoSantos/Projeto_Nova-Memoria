<?php

$server = "localhost";
$server_user = "root";
$server_password = "";
$database_name = "nova_mem";

// Conectar ao banco de dados
$conexao = mysqli_connect($server, $server_user, $server_password, $database_name);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
