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