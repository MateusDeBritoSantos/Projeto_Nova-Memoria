<?php
require_once "database.php";

// Validação e segurança básica
$id_cads = isset($_POST['id_cads']) ? intval($_POST['id_cads']) : 0;
$nome_cad = $_POST['nome_cad'] ?? '';
$email_cad = $_POST['email_cad'] ?? '';
$celular_cad = $_POST['celular_cad'] ?? '';
$senha_cad = $_POST['senha_cad'] ?? '';
$confirmarsenha_cad = $_POST['confirmarsenha_cad'] ?? '';
$data_cad = $_POST['data_cad'] ?? '';
$gen_cad = $_POST['gen_cad'] ?? '';
$estado_cad = $_POST['estado_cad'] ?? '';
$cidade_cad = $_POST['cidade_cad'] ?? '';

// Verificar se senha e confirmação são iguais
if ($senha_cad !== $confirmarsenha_cad) {
    echo "Erro: As senhas não coincidem.";
    exit;
}



$sql_update = "UPDATE listar_nova_mem SET 
    nome_cad = ?, 
    email_cad = ?, 
    celular_cad = ?, 
    senha_cad = ?, 
    confirmarsenha_cad = ?, 
    data_cad = ?, 
    gen_cad = ?, 
    estado_cad = ?, 
    cidade_cad = ? 
WHERE id_cads = ?";

$stmt = mysqli_prepare($conexao, $sql_update);
mysqli_stmt_bind_param($stmt, "sssssssssi", 
    $nome_cad, 
    $email_cad, 
    $celular_cad, 
    $senha_cad, 
    $confirmarsenha_cad, 
    $data_cad, 
    $gen_cad, 
    $estado_cad, 
    $cidade_cad, 
    $id_cads
);

// Executar e redirecionar
if (mysqli_stmt_execute($stmt)) {
    header('Location: listar_cadastro.php');
    exit;
} else {
    echo "Erro ao atualizar cadastro: " . mysqli_error($conexao);
}

mysqli_stmt_close($stmt);
?>