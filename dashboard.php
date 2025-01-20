<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
<a href="logout.php">Log Out</a>
</body>
</html>
