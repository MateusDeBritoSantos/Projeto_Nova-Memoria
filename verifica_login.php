<?php
session_start();
// verifica o id do usuário logado, se não tiver id, redireciona para a página de login.
if (!isset($_SESSION['id_cads'])) {
    header("Location: login_usuario.php");
    exit();
}
?>