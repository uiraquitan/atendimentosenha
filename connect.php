<?php

$host = "localhost";
$user = "root";
$pass = "izaqui123.8";
$dbname = "senhas";

try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados";
}
