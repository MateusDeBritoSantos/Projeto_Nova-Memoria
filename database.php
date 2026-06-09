<?php

// config local
$server = "localhost";
$server_user = "root";
$server_password = "";
$database_name = "nova_mem";
$port = "3306";

//railway
$server = getenv("MYSQLHOST") ?: $server;
$server_user = getenv("MYSQLUSER") ?: $server_user;
$server_password = getenv("MYSQLPASSWORD") ?: $server_password;
$database_name = getenv("MYSQL_DATABASE") ?: $database_name;
$port = getenv("MYSQLPORT") ?: $port;

//conexão
$conexao = mysqli_connect($server, $server_user, $server_password, $database_name);

//erro de conexão
if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}