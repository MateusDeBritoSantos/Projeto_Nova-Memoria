<?php
require_once "database.php";


$id_cads = $_POST['id_cads'] ?? null;
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



// Preparar query segura
$sql = "INSERT INTO listar_nova_mem 
    (nome_cad, email_cad, celular_cad, senha_cad, confirmarsenha_cad, data_cad, gen_cad, estado_cad, cidade_cad) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sssssssss",
    $nome_cad,
    $email_cad,
    $celular_cad,
    $senha_cad,
    $confirmarsenha_cad,
    $data_cad,
    $gen_cad,
    $estado_cad,
    $cidade_cad
);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: index.php");
    exit;
} else {
    echo "Falha ao realizar cadastro: " . mysqli_error($conexao);
}
?>
