<?php

require_once "verifica_login.php";
require_once "database.php";

$id_cads = $_SESSION['id_cads'];

$sql = "SELECT * FROM listar_nova_mem WHERE id_cads = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id_cads);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Perfil</title>
</head>

<body>

<h2>Editar Perfil</h2>

<form action="salvar_perfil.php" method="POST">


<input type="hidden"
       name="id_cads"
       value="<?php echo $usuario['id_cads']; ?>">

<label>Nome:</label>
<input type="text"
       name="nome_cad"
       value="<?php echo htmlspecialchars($usuario['nome_cad']); ?>">
<br>

<label>Email:</label>
<input type="email"
       name="email_cad"
       value="<?php echo htmlspecialchars($usuario['email_cad']); ?>">
<br>

<label>Celular:</label>
<input type="text"
       name="celular_cad"
       value="<?php echo htmlspecialchars($usuario['celular_cad']); ?>">
<br>

<label>Data de Nascimento:</label>
<input type="date"
       name="data_cad"
       value="<?php echo htmlspecialchars($usuario['data_cad']); ?>">
<br>

<label>Gênero:</label>

<select name="gen_cad">

    <option value="Masculino"
    <?php if($usuario['gen_cad'] == 'Masculino') echo 'selected'; ?>>
    Masculino
    </option>

    <option value="Feminino"
    <?php if($usuario['gen_cad'] == 'Feminino') echo 'selected'; ?>>
    Feminino
    </option>

</select>

<br>

<label>Estado:</label>

<select name="estado_cad">

    <option value="AC" <?php if($usuario['estado_cad']=="AC") echo "selected"; ?>>Acre</option>

    <option value="AL" <?php if($usuario['estado_cad']=="AL") echo "selected"; ?>>Alagoas</option>

    <option value="AP" <?php if($usuario['estado_cad']=="AP") echo "selected"; ?>>Amapá</option>

    <option value="AM" <?php if($usuario['estado_cad']=="AM") echo "selected"; ?>>Amazonas</option>

    <option value="BA" <?php if($usuario['estado_cad']=="BA") echo "selected"; ?>>Bahia</option>

    <option value="CE" <?php if($usuario['estado_cad']=="CE") echo "selected"; ?>>Ceará</option>

    <option value="DF" <?php if($usuario['estado_cad']=="DF") echo "selected"; ?>>Distrito Federal</option>

    <option value="ES" <?php if($usuario['estado_cad']=="ES") echo "selected"; ?>>Espírito Santo</option>

    <option value="GO" <?php if($usuario['estado_cad']=="GO") echo "selected"; ?>>Goiás</option>

    <option value="MA" <?php if($usuario['estado_cad']=="MA") echo "selected"; ?>>Maranhão</option>

    <option value="MT" <?php if($usuario['estado_cad']=="MT") echo "selected"; ?>>Mato Grosso</option>

    <option value="MS" <?php if($usuario['estado_cad']=="MS") echo "selected"; ?>>Mato Grosso do Sul</option>

    <option value="MG" <?php if($usuario['estado_cad']=="MG") echo "selected"; ?>>Minas Gerais</option>

    <option value="PA" <?php if($usuario['estado_cad']=="PA") echo "selected"; ?>>Pará</option>

    <option value="PB" <?php if($usuario['estado_cad']=="PB") echo "selected"; ?>>Paraíba</option>

    <option value="PR" <?php if($usuario['estado_cad']=="PR") echo "selected"; ?>>Paraná</option>

    <option value="PE" <?php if($usuario['estado_cad']=="PE") echo "selected"; ?>>Pernambuco</option>

    <option value="PI" <?php if($usuario['estado_cad']=="PI") echo "selected"; ?>>Piauí</option>

    <option value="RJ" <?php if($usuario['estado_cad']=="RJ") echo "selected"; ?>>Rio de Janeiro</option>

    <option value="RN" <?php if($usuario['estado_cad']=="RN") echo "selected"; ?>>Rio Grande do Norte</option>

    <option value="RS" <?php if($usuario['estado_cad']=="RS") echo "selected"; ?>>Rio Grande do Sul</option>

    <option value="RO" <?php if($usuario['estado_cad']=="RO") echo "selected"; ?>>Rondônia</option>

    <option value="RR" <?php if($usuario['estado_cad']=="RR") echo "selected"; ?>>Roraima</option>

    <option value="SC" <?php if($usuario['estado_cad']=="SC") echo "selected"; ?>>Santa Catarina</option>

    <option value="SP" <?php if($usuario['estado_cad']=="SP") echo "selected"; ?>>São Paulo</option>

    <option value="SE" <?php if($usuario['estado_cad']=="SE") echo "selected"; ?>>Sergipe</option>

    <option value="TO" <?php if($usuario['estado_cad']=="TO") echo "selected"; ?>>Tocantins</option>

</select>
<label>Cidade:</label>
<input type="text"
       name="cidade_cad"
       value="<?php echo htmlspecialchars($usuario['cidade_cad']); ?>">
<br>

<input type="submit" value="Salvar Alterações">
```

</form>

</body>
</html>

<style>
    body{

    margin:0;

    font-family: Arial, sans-serif;

    background:#d9d9d9;
}

.container{

    width:90%;

    margin:40px auto;
}

h1{

    color:#8ea2e6;

    font-size:60px;

    font-weight:normal;

    margin-bottom:30px;
}

form{

    width:85%;
}

input,
select{

    width:100%;

    background:#9aa7d6;

    color:white;

    border:none;

    padding:18px;

    margin-bottom:12px;

    border-radius:4px;

    font-size:18px;

    box-sizing:border-box;
}

input:focus,
select:focus{

    outline:none;

    box-shadow:0 0 5px #6f7fd3;
}

.botoes{

    margin-top:30px;

    display:flex;

    gap:15px;
}

button{

    background:#7c83f0;

    color:white;

    border:none;

    padding:15px 25px;

    border-radius:5px;

    cursor:pointer;
}

.btn-voltar{

    background:#666;

    color:white;

    text-decoration:none;

    padding:15px 25px;

    border-radius:5px;
}

.lateral{

    position:fixed;

    right:0;

    top:0;

    width:110px;

    height:100vh;

    background:#9aa7d6;
}
</style>