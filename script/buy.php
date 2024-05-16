<?php
session_start();
$_SESSION['order'] = [];
header("Location: ../cart.php");
?>
<a href="index.php">Главная</a>