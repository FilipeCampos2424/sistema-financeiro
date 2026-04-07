<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

    <?php  
    if ($_SESSION["perfil"] == "cliente"): ?>
    <p>Área do Cliente</p>
    <?php
    elseif ($_SESSION["perfil"] == "empresa")?>
    <P>Área da Empresa</p>
    <?php endif; ?>
</body>
</html>