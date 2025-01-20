<?php
$host = 'localhost'; // або IP сервера
$db = 'Todo_list';
$user = 'morozua';
$pass = 'password'; // пароль до MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Помилка підключення: " . $e->getMessage());
}
?>