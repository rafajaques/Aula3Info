<?php
# compras_edt.php
require('inc/banco.php');

$id = $_POST['id'] ?? null;
$item = $_POST['item'] ?? null;

$sql = $pdo->prepare('UPDATE compras SET item = :item WHERE id = :id');

// Executar consulta sem precisar fazer o bind previamente

$sql->execute([
    ':id' => $id,
    ':item' => $item,
]);

header('location:compras.php');