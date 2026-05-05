<?php  
require_once __DIR__ . '/../config/db.php';

function listar_conta(): array {
    $sql = "SELECT * FROM contas ORDER BY id_conta ASC";
    return db()->query($sql)->fetchAll();
}

function criar_conta(string $descricao, float $valor, string $tipo): int {
$sql = "INSERT INTO contas (descricao, valor, tipo) VALUES (?,?,?)";
$stmt = db()->prepare($sql);
$stmt->execute([$descricao, $valor, $tipo]);
return (int) db()->lastInsertId();
}

function buscar_conta(int $id_conta): ?array {
    $sql = "SELECT * FROM contas WHERE id_conta = ?";
    $stmt = db()->prepare($sql);
    $stmt->execute([$id_conta]);
    $row = $stmt->fetch();
    return $row ?: null;
}

function atualizar_conta(int $id_conta, string $descricao, string $tipo, float $valor): bool {
    $sql = "UPDATE contas SET descricao = ?, tipo = ?, valor = ? WHERE id_conta = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$descricao, $tipo, $valor, $id_conta]);
}

function excluir_conta(int $id_conta) {
    $sql = "DELETE FROM contas WHERE id_conta = ?";
    $stmt = db()->prepare($sql);
    return $stmt->execute([$id_conta]);
}


?>