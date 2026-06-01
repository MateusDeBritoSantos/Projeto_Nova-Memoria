<?php

//  CONFIG LOCAL (XAMPP)
$server = "localhost";
$server_user = "root";
$server_password = "";
$database_name = "nova_mem";

//  SOBRESCREVE SE ESTIVER NO RENDER/RAILWAY
$server = getenv("MYSQLHOST") ?: $server;
$server_user = getenv("MYSQLUSER") ?: $server_user;
$server_password = getenv("MYSQLPASSWORD") ?: $server_password;
$database_name = getenv("MYSQLDATABASE") ?: $database_name;

//  CONEXÃO
$conexao = mysqli_connect($server, $server_user, $server_password, $database_name);

//  ERRO DE CONEXÃO
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}