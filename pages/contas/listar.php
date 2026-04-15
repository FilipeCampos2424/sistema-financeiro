<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../data/dados.php";
?>

<h2>Listagem de Contas</h2>
<br>
<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>Descrição</th>
<th>Valor</th>
<?php if ($perfil == 'proprietario'): ?>
    <th>Tipo</th>
    <?php endif; ?>
</tr>
</thead>
<tbody>
    <?php foreach ($contas as $conta):  
        
        if ($conta['tipo'] === $perfil): ?>
        <tr>
            <td><?php echo $conta['descricao']; ?></td>
            <td><?php echo $conta['valor']; ?></td>
        </tr>
        <?php elseif ($perfil == 'proprietario'): ?>
                    <tr>
            <td><?php echo $conta['descricao']; ?></td>
            <td><?php echo $conta['valor']; ?></td>
            <td><?php echo $conta['tipo']; ?></td>
        </tr>
        <?php endif; endforeach; ?>
</tbody>
</table>
<br><br><br><br><br>
<?php include "../../includes/footer.php"; ?>