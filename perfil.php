<?php
require_once "verifica_login.php";
require_once "database.php";
// parte do código responsável por exibir os dados do usuário logado, para isso pega o id do usuário logado, 
// prepara a consulta para buscar os dados, vincula o id, executa a consulta, pega o resultado e converte em um array para 
// exibir no perfil.
$id = $_SESSION['id_cads'];

$sql = "SELECT * FROM listar_nova_mem WHERE id_cads = ?";
$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Perfil</title>
  <link rel="shortcut icon" href="assests/imagens/brain_onlyw.png" type="image/x-icon">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #d9d9d9;
    }

    .container {
      display: flex;
      width: 90%;
      height: 80vh;
      margin: 40px auto;
      background-color: #e5e5e5;
    }

    .left {
      width: 50%;
      padding: 30px;
    }

    .right {
      width: 50%;
      background-color: #9aa7d6;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    h1 {
      color: #8ea2e6;
      font-weight: normal;
      margin-bottom: 20px;
    }

    .field {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #9aa7d6;
      color: white;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 3px;
    }

    .field span {
      font-style: italic;
    }

    .edit {
      cursor: pointer;
    }

    .edit:hover {
      opacity: 0.7;
    }
    .logo-perfil{
        width: 250px;
        height: 250px;
    }
  .btn-editar{
    background: #28a745;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px;
}

.btn-excluir{
    background: #dc3545;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
}
.btn-voltar{
    background:#6c757d;
    color:white;
    padding:12px 20px;
    text-decoration:none;
    border-radius:5px;
    display:inline-block;
    margin-top:10px;
}

.btn-voltar:hover{
    opacity:0.9;
}
    

  </style>
</head>

<body>
  <?php 

if(isset($_SESSION['mensagem'])){

    echo "<div class='sucesso'>"
         . $_SESSION['mensagem'] .
         "</div>";

    unset($_SESSION['mensagem']);
}
?>


  <div class="container">

    <!-- Lado esquerdo -->
    <div class="left">
      <h1>Perfil</h1>

      <div class="field">
        <span>Nome: <?php echo htmlspecialchars($usuario['nome_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Email: <?php echo htmlspecialchars($usuario['email_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Celular: <?php echo htmlspecialchars($usuario['celular_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Data de Nascimento: <?php echo htmlspecialchars($usuario['data_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Gênero: <?php echo htmlspecialchars($usuario['gen_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Estado: <?php echo htmlspecialchars($usuario['estado_cad']); ?></span>
        <span class="edit"></span>
      </div>

      <div class="field">
        <span>Cidade: <?php echo htmlspecialchars($usuario['cidade_cad']); ?></span>
        <span class="edit"></span>
      </div>
      <div style="margin-top:20px;">
        
        <a href="editar_perfil.php" class="btn-editar">
          Editar Perfil
        </a>
        
        <a href="excluir_perfil.php" class="btn-excluir"
        onclick="return confirm('Tem certeza que deseja excluir sua conta? Esta ação não poderá ser desfeita.');">
        Excluir Conta
      </a>
      
          <a href="pagina_principal.php" class="btn-voltar">
            Voltar para Página Inicial
          </a>
      
    </div>
  </div>

    <!-- Lado direito -->
    <div class="right">
      <img src="assests/imagens/brain_onlyw.png" alt="Logo Nova Memória" class="logo-perfil">
    </div>

  </div>
    
</body>
</html>