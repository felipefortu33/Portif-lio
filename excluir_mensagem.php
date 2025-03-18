<?php
require 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    try {
        $stmt = $pdo->prepare("DELETE FROM mensagens WHERE id = ?");
        $stmt->execute([$id]);
        header("Location: mensagens.php");
    } catch (PDOException $e) {
        die("Erro ao excluir mensagem: " . $e->getMessage());
    }
}
?>
