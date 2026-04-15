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
<th>Usuário</th>
<th>Senha</th>
<th>Perfil</th>
</tr>
</thead>
<tbody>
    <?php foreach ($usuarios as $usuario):  
         ?>
        <tr>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['senha']; ?></td>
            <td><?php echo $usuario['perfil']; ?></td>
        </tr>
        <?php endforeach; ?>
</tbody>
</table>
