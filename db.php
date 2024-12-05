<?php
$servername = "127.0.0.1"; // Имя сервера
$username = "root"; // Имя пользователя БД
$password = ""; // Пароль БД
$dbname = "logreg"; // Название базы данных

// Устанавливаем соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем наличие ошибок при соединении
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>