<?php
session_start();

require_once 'db.php'; // Подключаем файл с подключением к БД

// Получение данных из формы
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хэшируем пароль

// Проверяем, существует ли пользователь с таким именем или email
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['error'] = 'Пользователь с таким именем или email уже существует.';
    header("Location: register.php");
    exit();
}

// Вставляем нового пользователя в базу данных
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $username, $email, $password);
if ($stmt->execute()) {
    // Установка сессии для авторизованного пользователя
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;

    // Редирект на главную страницу
    header("Location: index.php");
    exit();
} else {
    echo "Ошибка при регистрации: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>