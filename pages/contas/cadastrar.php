<?php
session_start();
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../includes/footer.php";
?>

<form>
<div class="mb-3">
<label class="form-label">Descrição</label>
<input type="text" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Valor</label>
<input type="number" class="form-control">
</div>
<label class="form-label">Tipo</label>
<input type="number" class="form-control">
</div>
<button class="btn btn-success">Cadastrar</button>
</form>