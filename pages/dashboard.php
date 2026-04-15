<?php
session_start();
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/footer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

    <?php  
    if ($_SESSION["perfil"] == "cliente"): ?>
    <p>Área do Cliente</p>
    <div class="card text-bg-success">
<div class="card-body">
<h5 class="card-title">Contas a Receber</h5>
<p class="card-text">Pagamento Salário - R$ 1.610,00</p>
<p class="card-text">Dívida de Davi Neris - R$ 200,00</p>
</div>
</div>
    <?php
    elseif ($_SESSION["perfil"] == "empresa"): ?>
    <P>Área da Empresa</p>
        <div class="card text-bg-success">
<div class="card-body">
<h5 class="card-title">Contas a Receber</h5>
<p class="card-text">Patrocinador - R$ 3.270,00</p>
<p class="card-text">Vendas acumuladas do mês - R$ 4500,00</p>
</div>
</div>
    <?php endif; ?>
</body>
</html>