<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../data/dados.php";

?>

    <h2>Relatório Financeiro</h2>
    <div class="card text-bg-success">
<div class="card-body">
<h5 class="card-title">Recebimentos</h5>
<p class="card-text">Dívidas de terceiros - R$ 15.000,00</p>
<p class="card-text">Patrocinadores - R$ 5.000,00</p>
<p class="card-text">Investimento - R$ 2.340,00</p>
<h5 class="card-title">Total estimado do mês</h5>
<p class="card-text">R$ 22.340,00</p>
</div>
</div>


<?php include "../../includes/footer.php"; ?>