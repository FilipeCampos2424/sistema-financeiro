<?php
include "config/config.php";
include "data/dados.php";
include "includes/header.php";

$erro = "";

    if ($_POST){
        foreach ($usuarios as $user) {
            if (
                $_POST["usuario"] == $user["usuario"] &&
                $_POST["senha"] == $user["senha"]
            ) {
                $_SESSION["usuario"] = $user["usuario"];
                $_SESSION["perfil"] = $user["perfil"];
                header("Location: pages/dashboard.php");
                exit;
            }

        }
        $erro = "Usuário ou senha inválidos!";
}
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-4 col-sm-8 border p-4 shadow-sm rounded">

<form method="POST" action="" >
    <h2 class="text-center mb-4">Login</h2>
    <label>Usuário:</label>
    <div class="row justify-content-center">
    <input type="text" name="usuario" required>
    </div>
    <br>
    <label>Senha:</label>
    <div class="row justify-content-center">
    <input type="text" name="senha" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
</form>
</div>
</div>