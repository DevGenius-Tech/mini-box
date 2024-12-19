<?php
$dsn = "mysql:host=localhost;dbname=comercio"; // Nome do banco de dados
$username = "root"; // Usuário padrão do MySQL
$password = ""; // Senha padrão (deixe vazio se não houver)

try {
    $pdo = new PDO($dsn, $username, $password); // Renomeando para $pdo
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
