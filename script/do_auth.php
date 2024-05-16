<?php
$user = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=food", $user,$password);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


if(count($users)>0){
    session_start();
    $_SESSION['name'] = $users[0]['name'];
    $_SESSION['email'] = $users[0]['email'];
    header("Location:../index.php");
}
else{
    echo "Вы ввели неверные данные";
    echo "<a href='../auth.php'>Авторизация</a>";
}
?>