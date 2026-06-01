 <?php require_once "acessibilidade.php";?>
 
 
 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro e Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assests/imagens/brain_onlyw.png" type="image/x-icon">
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

.cadastro .form-container,
.login .direita {
  flex: 1;
  padding: 40px;
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 10px;
}

.cadastro .imagem-lateral,
.login .esquerda {
  flex: 1;
  background: linear-gradient(135deg, #d8e3ff, #a6baff);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 40px;
}

.form-container h2,
.login h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #555;
}

form label {
  font-weight: 500;
  margin-top: 10px;
  color: #666;
}

form input {
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 5px;
  background: #d8d8ff;
  width: 100%;
}

button {
  padding: 10px;
  background: #9370db;
  border: none;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background: #7b5fc3;
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

.login .esquerda h1 {
  font-size: 2.5rem;
  font-weight: 900;
  margin: 10px 0;
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
}

.entrar {
  background: #000;
  color: #fff;
  padding: 10px;
  border-radius: 5px;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }
}

img{
  width: 450px;
  height: 450px;
}
</style>

<!-- teste_login.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>


<body>
  <?php

if(isset($_GET['status']) &&
   $_GET['status'] == 'conta_excluida'){

    echo "
    <div style='
        background:#d4edda;
        color:#155724;
        padding:15px;
        margin:15px;
        border-radius:5px;
        text-align:center;
    '>
        Conta excluída com sucesso.
    </div>
    ";
}
?>
  <div class="container login">
    <div class="esquerda">
      <img src="assests/imagens/brain_onlyw.png">
      <p>Melhor Tecnologia</p>
      <h1>Exercite sua mente</h1>
      <a href="form_cadastro_usuario.php" class="btn-cadastro">Cadastre-se</a>
    </div>
    <div class="direita">
      <h2>Entrar</h2>
      <form action="login_usuario.php" method="post">
        <label>Nome completo:</label>
        <input type="text" name="login_user">

        <label>Senha:</label>
        <input type="password" name="password_user">

        <div class="botoes">
          <button type="button" class="cancelar">Cancelar</button>
          <button type="submit" class="entrar">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
