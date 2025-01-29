<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        /* Червона рамка для незаповнених полів */
        .error {
            border: 2px solid red;
            background-color: #ffe6e6;
        }
    </style>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['user'])): ?>
    <a href="logout.php" class="button" id="ButtonLogOut">Log Out</a>
<?php else: ?>
    <button class="button" onclick="openPopup()" id="ButtonLogIn">Log In</button>
<?php endif; ?>

<!-- Overlay для попапу -->
<div class="overlay" id="loginOverlay">
    <div class="popup">
        <span class="close-btn" onclick="closePopup()">×</span>
        <h2>Log In</h2>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
</div>

<script>
    function openPopup() {
        document.getElementById('loginOverlay').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('loginOverlay').style.display = 'none';
    }
</script>

<div class="container">
    <h1>To do list</h1>
    <form action="/add.php" method="post" onsubmit="return validateForm()">
        <input type="text" name="name" id="name" placeholder="Введіть ім'я" class="form-control">
        <input type="text" name="pass" id="pass" placeholder="Введіть пароль" class="form-control">
        <input type="text" name="email" id="email" placeholder="Введіть пошту" class="form-control">
        <input type="datetime-local" name="date" id="date" class="form-control">
        <textarea name="bio" id="bio" placeholder="Введіть bio" class="form-control"></textarea>

        <button type="submit" name="sendName" class="btn btn-success">Додати запис</button>
    </form>

    <script>
        function validateForm() {
            let isValid = true;
            let fields = document.querySelectorAll("#name, #pass, #email, #date, #bio");

            fields.forEach(field => {
                if (field.value.trim() === "") {
                    field.classList.add("error");
                    isValid = false;
                } else {
                    field.classList.remove("error");
                }
            });

            return isValid; // Якщо хоча б одне поле пусте, форма не відправиться
        }
    </script>

    <?php if (isset($_SESSION['user'])) {
        require 'showDB.php';
    } ?>

</div>

</body>
</html>
