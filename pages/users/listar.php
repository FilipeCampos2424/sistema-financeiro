<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../data/dados.php";
require_once __DIR__ . '/../../src/repository.php';
$usuarios = listar_usuarios();
?>

<h2>Lista de Usuários</h2>
<br>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Perfil</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= (int)$u['id_usuario'] ?></td>
                <td><?= htmlspecialchars($u['nome_usuario']) ?></td>

                <td><?= htmlspecialchars ($u['senha']) ?></td>

                <td><?= htmlspecialchars ($u['perfil']) ?></td>
                <td class="row">
                </td>
            </tr>
            <?php endforeach; ?>
            

            <?php if (count ($contas) === 0) : ?>
                <tr><td colspan="5">Nenhuma conta cadastrada.</td></tr>
            <?php endif; ?>
    </tbody>
</table>
</tbody>
</table>
<br><br><br><br><br>
<?php include "../../includes/footer.php"; ?>