<?php

session_start();
require_once "database.php";

$id_cads = $_POST['id_cads'];
$nome = $_POST['nome_cad'];
$email = $_POST['email_cad'];
$celular = $_POST['celular_cad'];
$data = $_POST['data_cad'];
$genero = $_POST['gen_cad'];
$estado = $_POST['estado_cad'];
$cidade = $_POST['cidade_cad'];

$sql = "UPDATE listar_nova_mem SET
        nome_cad = ?,
        email_cad = ?,
        celular_cad = ?,
        data_cad = ?,
        gen_cad = ?,
        estado_cad = ?,
        cidade_cad = ?
        WHERE id_cads = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssssssi",
    $nome,
    $email,
    $celular,
    $data,
    $genero,
    $estado,
    $cidade,
    $id_cads
);

if(mysqli_stmt_execute($stmt)){

    $_SESSION['mensagem'] = "Perfil atualizado com sucesso!";

}else{

    $_SESSION['mensagem'] = "Erro ao atualizar perfil.";

}

header("Location: perfil.php");
exit();

?>