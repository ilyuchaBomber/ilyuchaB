<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: index.php");
    exit();
}
?>

<h1>Добро пожаловать, <?=$_SESSION['username']?></h1>
<p>Это ваш личный кабинет.</p>