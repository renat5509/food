<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>
                <img class="img-logo" src="img/logo.png" alt="">
            </h1>
            <a href="auth.php">Авторизация</a>
            <a href="index.php">Главная</a>
            <a href="">Контакты</a>
            <a href="script/do_exit.php">Выход</a>
            <div class="user-data">
            <?php
            session_start();
            if (isset($_SESSION['name']) && isset($_SESSION['email'])){?>
            <p><?php print_r($_SESSION['name']);?></p>
            <p><?php print_r($_SESSION['email']);?></p>
            <?php
            }
            ?>
            </div>
    </div>
</header>
<main>
<?php


$user = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=food", $user,$password);

if (isset($_SESSION['order']) && count($_SESSION['order'])>0){
    $order = $_SESSION['order'];
}
else{
    $order = [];
    echo "Корзина пуста";
}

for ($i=0; $i < count($order); $i++) { 
$sql = "SELECT * FROM `foods` WHERE `id` = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $order[$i]);
$stmt->execute();
$product=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="food-table">
    <p><?php echo $product[0]['title']?></p>
    <p><?php echo $product[0]['item']?></p>
    <img src="<?php echo $product[0]['img']?>" alt="">
    <p><?php echo $product[0]['price']?>₽</p>
    
</div>
<?php
}
?>
<?php
if ((isset($_SESSION['order']) && count($_SESSION['order'])>0)){?>
    <a href="script/buy.php">Купить</a>
<?php
}
?>
</main>
    <footer>
        <p>Подписаться на нас</p>
        <input type="email" placeholder="email">
        <button type="submit">Подписаться</button>
    </footer>
</body>
</html>
