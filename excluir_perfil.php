<?php

session_start();
require_once "database.php";

$id = $_SESSION['id_cads'];

$sql = "DELETE FROM listar_nova_mem WHERE id_cads = ?";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if(mysqli_stmt_execute($stmt)){

    session_destroy();

    header("Location: index.php?status=conta_excluida");
    exit();

}else{

    echo "Erro ao excluir conta.";

}

?>