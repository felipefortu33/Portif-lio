<?php
session_start();
require 'config.php'; // Conexão com o banco

// Função para sanitizar entradas
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $business_type = sanitize_input($_POST['business-type']);
    $message = sanitize_input($_POST['message']);

    // Verificação básica de campos
    if (empty($name) || empty($email) || empty($message)) {
        die("Todos os campos obrigatórios devem ser preenchidos.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("E-mail inválido.");
    }

    // Inserir os dados no banco de dados
    try {
        $stmt = $pdo->prepare("INSERT INTO mensagens (nome, email, telefone, tipo_negocio, mensagem) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $business_type, $message]);

        echo json_encode(["status" => "success", "message" => "Mensagem enviada com sucesso!"]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Erro ao salvar mensagem: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
}
?>
