<?php
session_start();
require 'configDB.php'; // Підключення до бази даних

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';


    // Перевірка логіну
    $stmt = $pdo->prepare("SELECT * FROM `Todo` WHERE name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);



    if ($user) {
        $stmt = $pdo->prepare("SELECT pass FROM `Todo` WHERE name = ?");
        $stmt->execute([$username]);
        $pass = $stmt->fetchColumn();
        if (password_verify($password, $pass)) {
            $_SESSION['user'] = $user['name'];
            //echo "$_SESSION[user]";
            header("Location: index.php");// Перенаправлення на сторінку після успішного входу
        exit;
        } else {
            echo "<script>alert('Невірний пароль');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }


    } else {
        echo "<script>alert('Невірний логін');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
    }
}
