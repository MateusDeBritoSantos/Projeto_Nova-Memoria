<?php
session_start();
include('database.php');

// Processa o login quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login_user'] ?? '');
    $password = trim($_POST['password_user'] ?? '');

    if (empty($login) || empty($password)) {
        $_SESSION['mensagem'] = "Preencha todos os campos.";
        header("Location: login_usuario.php");
        exit;
    }

    // Consulta segura
    if (!isset($conexao) || !$conexao) {
        $_SESSION['mensagem'] = "Erro de conexão com o banco de dados.";
        header("Location: login_usuario.php");
        exit;
    }
    
    $sql = "SELECT * FROM listar_nova_mem WHERE nome_cad = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    
    if (!$stmt) {
        $_SESSION['mensagem'] = "Erro ao preparar a consulta.";
        header("Location: login_usuario.php");
        exit;
    }
    
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $usuario = mysqli_fetch_assoc($resultado);

    // Verifica senha (texto simples)
    if ($usuario && $usuario['senha_cad'] === $password) {
        $_SESSION['usuario'] = $usuario['nome_cad'];
        header("Location: pagina_principal.php");
        exit;
    } else {
        $_SESSION['mensagem'] = "Nome ou senha inválidos.";
        header("Location: login_usuario.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #d8e3ff;
    }

    .container {
      display: flex;
      width: 100%;
      min-height: 100vh;
    }

    .esquerda, .direita {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .esquerda {
      background: linear-gradient(135deg, #d8e3ff, #a6baff);
      text-align: center;
    }

    .esquerda img {
      max-width: 200px;
    }

    .direita {
      background: #fff;
      gap: 10px;
    }

    h1, h2 {
      color: #555;
    }

    form {
      width: 100%;
      max-width: 400px;
    }

    form label {
      font-weight: 500;
      margin-top: 10px;
      color: #666;
      display: block;
    }

    form input {
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      background: #d8d8ff;
      width: 100%;
    }

    .botoes {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .cancelar {
      background: transparent;
      border: 1px solid #333;
      color: #333;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .entrar {
      background: #000;
      color: #fff;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-cadastro {
      margin-top: 20px;
      background: #a259ff;
      color: white;
      padding: 10px 20px;
      border-radius: 30px;
      text-decoration: none;
    }

    .btn-cadastro:hover {
      background: #8939e7;
    }

    .mensagem {
      color: red;
      margin-bottom: 15px;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <div class="container login">
    <div class="esquerda">
      <img src="imagens/logo.png" alt="Logo do projeto">
      <p>Melhor Tecnologia</p>
      <h1>Exercite sua mente</h1>
      <a href="form_cadastro_usuario.php" class="btn-cadastro">Cadastre-se</a>
    </div>

    <div class="direita">
      <h2>Entrar</h2>

      <?php
      if (!empty($_SESSION['mensagem'])) {
          echo "<p class='mensagem'>" . $_SESSION['mensagem'] . "</p>";
          unset($_SESSION['mensagem']);
      }
      ?>

      <form action="login_usuario.php" method="post">
        <label>Nome completo:</label>
        <input type="text" name="login_user" required>

        <label>Senha:</label>
        <input type="password" name="password_user" required>

        <div class="botoes">
          <button type="reset" class="cancelar">Cancelar</button>
          <button type="submit" class="entrar">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
