<?php 
require_once "database.php";
require_once "header.php"; 

$conexao = mysqli_connect("localhost", "root", "", "nova_memoria");
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_listar = "SELECT * FROM listar_nova_mem";
$consulta_bd = mysqli_query($conexao, $sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #b3b3ff;
            color: white;
            padding: 16px;
        }

        header h1 {
            font-style: italic;
            margin: 0;
            font-size: 20px;
        }

        main {
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            overflow: hidden;
            width: 90%;
            max-width: 1600px;
        }

        thead {
            background-color: #f2f2f2;
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        img {
            width: 20px;
            height: 20px;
        }

        a img:hover {
            transform: scale(1.1);
            transition: 0.2s;
        }
    </style>
</head>
<body>

<header>
    <h1>LISTAR</h1>
</header>

<main>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Senha</th>
                <th>Confirmação de Senha</th>
                <th>Data de Nascimento</th>
                <th>Gênero</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dados_bd = mysqli_fetch_assoc($consulta_bd)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($dados_bd['id_cads']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['nome_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['email_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['celular_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['senha_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['confirmarsenha_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['data_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['gen_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['estado_cad']); ?></td>
                    <td><?php echo htmlspecialchars($dados_bd['cidade_cad']); ?></td>
                    <td>
                        <a href="form_atualizar_cadastro.php?id_cads=<?php echo $dados_bd['id_cads']; ?>">
                            <img src="imagens/upadate.png" alt="Atualizar">
                        </a>
                    </td>
                    <td>
                        <a href="excluir_cadastro.php?id_cads=<?php echo $dados_bd['id_cads']; ?>">
                            <img src="imagens/remover.png" alt="Excluir">
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

</body>
</html>
