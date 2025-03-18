<?php
session_start();
require 'config.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

try {
    $stmt = $pdo->query("SELECT * FROM mensagens ORDER BY data_envio DESC");
    $mensagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro ao buscar mensagens: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens Recebidas</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1e1e2f; /* Fundo escuro */
            color: #ffffff; /* Texto claro */
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #f0ad4e; /* Laranja */
        }
        .logout-btn {
            display: inline-block;
            margin: 10px 10px 0 0;
            background-color: #5bc0de; /* Azul */
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #31b0d5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #2c2c3e;
        }
        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #3a3a4f;
        }
        tr:nth-child(even) {
            background-color: #292933;
        }
        .btn {
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .btn-delete {
            background-color: #ff4d4f; /* Vermelho */
        }
        .btn-delete:hover {
            background-color: #d43f3a;
        }
        .btn-view {
            background-color: #28a745; /* Verde */
        }
        .btn-view:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>📩 Mensagens Recebidas</h2>

    <!-- Botão de Logout -->
    <a href="logout.php" class="logout-btn">Sair</a>
    <a href="index.html" class="logout-btn">Início</a>
    <a href="vendas.php" class="logout-btn">Vendas</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Tipo de Negócio</th>
            <th>Mensagem</th>
            <th>Data de Envio</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($mensagens as $mensagem) : ?>
        <tr class="<?= $mensagem['status'] == 'vista' ? 'vista' : 'nao-vista' ?>">
            <td><?= htmlspecialchars($mensagem['nome']) ?></td>
            <td><?= htmlspecialchars($mensagem['email']) ?></td>
            <td><?= htmlspecialchars($mensagem['telefone']) ?></td>
            <td><?= htmlspecialchars($mensagem['tipo_negocio']) ?></td>
            <td><?= htmlspecialchars($mensagem['mensagem']) ?></td>
            <td><?= htmlspecialchars($mensagem['data_envio']) ?></td>
            <td><?= ucfirst(htmlspecialchars($mensagem['status'])) ?></td>
            <td>
                <a href="marcar_vista.php?id=<?= htmlspecialchars($mensagem['id']) ?>" class="btn btn-view">✔ Vista</a>
                <a href="excluir_mensagem.php?id=<?= htmlspecialchars($mensagem['id']) ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir esta mensagem?')">🗑 Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    

</body>
</html>
