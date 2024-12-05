<?php
session_start();

require_once 'db.php';

// Получение данных из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Проверяем, существует ли пользователь с таким именем
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    // Если пароль верный, устанавливаем сессию
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Переходим на главную страницу
} else {
    $_SESSION['error'] = 'Неверное имя пользователя или пароль.';
    header("Location: login.php");
}

$stmt->close();
$conn->close();
?>