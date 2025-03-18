<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    try {
        $stmt = $pdo->prepare("UPDATE mensagens SET status = 'vista' WHERE id = ?");
        $stmt->execute([$id]);
        header("Location: mensagens.php");
    } catch (PDOException $e) {
        die("Erro ao marcar mensagem como vista: " . $e->getMessage());
    }
}
?>
