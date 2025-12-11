<?php
include "header.php";
session_start();
?>
<link rel="stylesheet" href="style.css">

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">

            <!-- Formulário de Login -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="login_user.php" method="POST">
                    <div class="form px-4 pt-5">
                        <input type="text" name="login_user" class="form-control mb-2" placeholder="Username">
                        <input type="password" name="password_user" class="form-control mb-2" placeholder="Password">
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </div>
                </form>

                <?php 
                if (isset($_SESSION['mensagem'])) {
                    $mensagem = $_SESSION['mensagem'];
                    echo "<p class='text-danger text-center mt-2'>$mensagem</p>";
                    unset($_SESSION['mensagem']);
                }
                ?>
            </div>

            <!-- formulario de cadadstro -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form action="cadastro_usuario.php" method="POST">
                    <div class="form px-4 pt-4">
                        <input type="text" name="nome_cad" class="form-control mb-2" placeholder="Nome">
                        <input type="text" name="email_cad" class="form-control mb-2" placeholder="Email">
                        <input type="text" name="celular_cad" class="form-control mb-2" placeholder="Celular">
                        <input type="password" name="senha_cad" class="form-control mb-2" placeholder="Senha">
                        <input type="password" name="confirmarsenha_cad" class="form-control mb-2" placeholder="Confirmar Senha">
                        <input type="text" name="data_cad" class="form-control mb-2" placeholder="Data de Nascimento">
                        <input type="text" name="gen_cad" class="form-control mb-2" placeholder="Gênero">
                        <input type="text" name="estado_cad" class="form-control mb-2" placeholder="Estado">
                        <input type="text" name="cidade_cad" class="form-control mb-2" placeholder="Cidade">
                        <button type="submit" class="btn btn-dark btn-block">Signup</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
