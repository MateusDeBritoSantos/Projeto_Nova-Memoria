<?php

//parte responsável por verificar o nivel do usuario se e admin ou user.

session_start();

if (!isset($_SESSION['id_cads'])) {
    header("Location: login_usuario.php");
    exit();
}

if ($_SESSION['nivel_cad'] != 2) {
    header("Location: pagina_principal.php");
    exit();
}
?>

