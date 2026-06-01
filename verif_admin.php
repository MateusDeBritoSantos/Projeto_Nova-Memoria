<?php

// session_start();

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// exit();

session_start();

if (!isset($_SESSION['id_cads'])) {
    header("Location: login_usuario.php");
    exit();
}

if ($_SESSION['nivel_cad'] != 2) {
    header("Location: pagina_principal.html");
    exit();
}
?>

