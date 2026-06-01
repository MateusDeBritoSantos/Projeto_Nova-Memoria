


 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro e Login</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    form {
  display: flex;
  flex-direction: column;
}
/* css cadastro */

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

.cadastro .form-container {
  flex: 1;
  padding: 40px;
  background: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.cadastro .imagem-lateral {
  flex: 1;
  background: linear-gradient(135deg, #d8e3ff, #a6baff);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 40px;
}

.form-container h2 {
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
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 5px;
  background: #d8d8ff;
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

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }
}

  </style>
</head>
<body>
  <!-- tela de cadastro -->
  <div class="container cadastro">
    <div class="form-container">
      <h2>Cadastre-se</h2>
      <form action="cadastro_usuario.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome_cad">

        <label>Email:</label>
        <input type="email" name="email_cad">

        <label>Celular:</label>
        <input type="text" name="celular_cad">

        <label>Senha:</label>
        <input type="password" name="senha_cad">

        <label>Confirmação de Senha:</label>
        <input type="password" name="confirmarsenha_cad">

        <label>Data de Nascimento:</label>
        <input type="date" name="data_cad">
        
        <label for="sexo">Gênero:</label>
        
        <select name="gen_cad" id="sexo">
          <option value="">Selecione</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>

        <label for = "estado">Estado:</label>
        
        <select name="estado_cad" id="estado">
            <option value="">Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</	option>
            <option value="PI">Piauí</	option>
            <option value="RJ">Rio de Janeiro</	option>
            <option value="RN">Rio Grande do Norte</	option>
            <option value="RS">Rio Grande do Sul</	option>
            <option value="RO">Rondônia</	option>
            <option value="RR">Roraima</	option>
            <option value="SC">Santa Catarina</	option>
            <option value="SP">São Paulo</	option>
            <option value="SE">Sergipe</	option>
            <option value="TO">Tocantins</	option>
        </select>

        <label>Cidade:</label>
        <input type="text" name="cidade_cad">

        <button type="submit">Cadastrar</button>
      </form>
    </div>
    <div class="imagem-lateral"></div>
  </div>








 
