<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/footer.php";
include "../../data/dados.php";
?>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>Descrição</th>
<th>Valor</th>
<th>Tipo</th>
</tr>
</thead>
<tbody>
    <?php foreach ($contas as $conta):  
        
        if ($conta['tipo'] === $perfil): ?>
        <tr>
            <td><?php echo $conta['descricao']; ?></td>
            <td><?php echo $conta['valor']; ?></td>
            <td><?php echo $conta['tipo']; ?></td>
        </tr>
        <?php endif; endforeach; ?>
</tbody>
</table>
