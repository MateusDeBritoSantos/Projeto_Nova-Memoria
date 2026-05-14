<?php
include "database.php";

$conexao = mysqli_connect('localhost', 'root', '', 'nova_memoria');

if (isset($_GET['id_cads'])) {
    $id_cads = intval($_GET['id_cads']); 

    $sql_excluir = "DELETE FROM listar_nova_mem WHERE id_cads = ?";
    $stmt = mysqli_prepare($conexao, $sql_excluir);
    mysqli_stmt_bind_param($stmt, "i", $id_cads);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header('Location: listar_cadastro.php');
        exit();
    } else {
        echo "Falha ao excluir cadastro: " . mysqli_error($conexao);
    }
} else {
    echo "ID não informado para exclusão.";
}
?>
