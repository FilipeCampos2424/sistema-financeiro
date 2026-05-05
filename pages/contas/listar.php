<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../data/dados.php";
require_once __DIR__ . '/../../src/repository.php';
$contas = listar_conta();
?>

<h2>Listagem de Contas</h2>
<br>
<?php if ($perfil == "empresa") { ?>
<div class="row">
<a class="btn" href="?acao=create">+ Nova conta</a>
</div>
<?php } ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <?php if ($perfil == "proprietario") { ?>
            <th>Tipo</th>
            <?php } ?>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contas as $c): ?>
        <?php if ($c['tipo'] === $perfil): ?>
            <tr>
                <td><?= (int)$c['id_conta'] ?></td>
                <td><?= htmlspecialchars($c['descricao']) ?></td>

                <?php if ($perfil == "proprietario"):  ?>
                <td><span class="badge"><?= htmlspecialchars ($c['tipo']) ?></span></td>
                <?php endif; ?>

                <td><?= htmlspecialchars ($c['valor']) ?></td>

                <?php if ($perfil == "empresa"): ?>
                <td class="row">
                    <a class="btn" href="?acao=edit&id=<?= (int)$c['id_conta'] ?>">Editar</a>

                    <form method="post" action="?acao=delete" onsubmit="return confirm ('Excluir esta conta?');">
                        <input type="hidden" name="id" value="<?= (int)$c['id_conta'] ?>">
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </form>
                </td>
                <?php endif; ?>
            </tr>
            <?php endif; ?>
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