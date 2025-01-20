<?php
 $name = $_POST['name'];
 if ($name == '') {
     echo 'Введіть ім*я';
     exit();
 }

 $pass = $_POST['pass'];
 if ($pass == '') {
    echo 'Введіть пароль';
    exit();
 } else {
    $password = password_hash($pass, PASSWORD_DEFAULT);
 }


 $email = $_POST['email'];
 if ($email == '') {
    echo 'Введіть пошту';
    exit();
 }

 $date = $_POST['date'];
 if ($date == '') {
    echo 'Введіть дату';
    exit();
 }

$bio = $_POST['bio'];
if ($bio == '') {
    echo 'Введіть bio';
    exit();
}

require 'configDB.php';

try {
    $sql = 'INSERT INTO Todo (name, pass, email, date, bio) VALUES (:name, :password, :email, :date, :bio)';
    $query = $pdo->prepare($sql);
    $query->execute([
        'name' => $name,
        'password' => $password, // Оновлено ключ
        'email' => $email,
        'date' => $date,
        'bio' => $bio
    ]);

    header('Location: /');
    exit;
} catch (PDOException $e) {
    die('Помилка збереження в базу: ' . $e->getMessage());
}
?>

