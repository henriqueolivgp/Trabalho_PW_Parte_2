<?php
session_start(); // Inicia a sessão (caso não esteja iniciada)

require __DIR__ . '/../../infrastructure/bd/connection.php';

$isAdmin = false; // Define a variável para verificar se o usuário é um administrador

if (isset($_SESSION["id"])) {
    $userId = $_SESSION["id"];

    // Consulta para verificar se o usuário é um administrador
    $query = "SELECT administrador FROM utilizadores WHERE id = :userId";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":userId", $userId);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $isAdmin = $row["administrador"] == 1; // Verifica se o valor da coluna "administrador" é igual a 1
    }
}
?>

