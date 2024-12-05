<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
</head>
<body>
    <h1>Привет, <?= $_SESSION['username'] ?>!</h1>
    <p>Это ваша панель управления.</p>
    <a href="logout.php">Выйти</a>
</body>
</html>