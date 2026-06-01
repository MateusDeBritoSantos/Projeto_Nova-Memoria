<?php
session_start();

if (!isset($_SESSION['id_cads'])) {
    header("Location: login_usuario.php");
    exit();
}
?>