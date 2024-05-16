<?php
$user = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=food", $user,$password);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email` = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();
$emails = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($emails)>0){
    echo "Данный пользователь уже существует";
    echo "<a href='../reg.php'>Регистрация</a>";
}
else{
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (:name, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    header("Location:../index.php");
}
?>