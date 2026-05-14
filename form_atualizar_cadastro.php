<?php include_once "header.php"; ?>

<?php 
// importar conexão com o banco
require_once "database.php";

if (!isset($conexao)) {
    die('Erro: Conexão com o banco de dados não foi estabelecida. Verifique database.php.');
}

// recuperar id via GET, com segurança básica
$id_cads = isset($_GET['id_cads']) ? intval($_GET['id_cads']) : 0;

// comando SQL para buscar o registro
$sql_listar = "SELECT * FROM listar_nova_mem WHERE id_cads = '$id_cads'";
$consulta_bd = mysqli_query($conexao, $sql_listar);
$dados_bd = mysqli_fetch_assoc($consulta_bd);
?>

<h3>Formulário de Atualização de Cadastro</h3>

<form action="atualizar_cadastro.php" method="POST"> 
    <input type="hidden" name="id_cads" value="<?php echo $dados_bd['id_cads']; ?>">

    <label for="nome_cad">Nome:</label>
    <input type="text" name="nome_cad" id="nome_cad" value="<?php echo $dados_bd['nome_cad']; ?>"><br><br>

    <label for="email_cad">Email:</label>
    <input type="text" name="email_cad" id="email_cad" value="<?php echo $dados_bd['email_cad']; ?>"><br><br>

    <label for="celular_cad">Celular:</label>
    <input type="text" name="celular_cad" id="celular_cad" value="<?php echo $dados_bd['celular_cad']; ?>"><br><br>

    <label for="senha_cad">Senha:</label>
    <input type="text" name="senha_cad" id="senha_cad" value="<?php echo $dados_bd['senha_cad']; ?>"><br><br>

    <label for="confirmarsenha_cad">Confirmar Senha:</label>
    <input type="text" name="confirmarsenha_cad" id="confirmarsenha_cad" value="<?php echo $dados_bd['confirmarsenha_cad']; ?>"><br><br>

    <label for="data_cad">Data:</label>
    <input type="text" name="data_cad" id="data_cad" value="<?php echo $dados_bd['data_cad']; ?>"><br><br>

    <label for="gen_cad">Gênero:</label>
    <input type="text" name="gen_cad" id="gen_cad" value="<?php echo $dados_bd['gen_cad']; ?>"><br><br>

    <label for="estado_cad">Estado:</label>
    <input type="text" name="estado_cad" id="estado_cad" value="<?php echo $dados_bd['estado_cad']; ?>"><br><br>

    <label for="cidade_cad">Cidade:</label>
    <input type="text" name="cidade_cad" id="cidade_cad" value="<?php echo $dados_bd['cidade_cad']; ?>"><br><br>

    <input type="submit" value="Atualizar Cadastro do Aluno">
</form>


<?php include_once "footer.php"; ?>