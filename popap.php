<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP проект - Логін</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Кнопка для відкриття попапу -->
<button id="openLoginModal">Увійти</button>

<!-- Попап -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>
        <h2>Логін</h2>
        <form method="POST" action="login.php">
            <label for="username">Логін:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Увійти</button>
        </form>
    </div>
</div>

</body>
</html>
