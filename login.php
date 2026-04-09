<?php
include "config/config.php";
include "data/dados.php";

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

<form method="POST" action="" >
    <h2>Login</h2>
    <label>Usuário:</label>
    <input type="text" name="usuario" required>

    <label>Senha:</label>
    <input type="text" name="senha" required>

    <button type="submit">Entrar</button>
</form>