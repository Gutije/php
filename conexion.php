<?php
$host = 'db';
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    echo "<h1>Conexión establecida correctamente</h1>";
    $version = $pdo->query('SELECT VERSION()')->fetchColumn();
    echo "<p>Versión de MariaDB: " . $version . "</p>";
} catch (PDOException $e) {
    echo "<h1>Error de conexión</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>
