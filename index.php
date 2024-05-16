<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>
                <img class="img-logo" src="img/logo.png" alt="">
            </h1>
            <a href="auth.php">Авторизация</a>
            <a href="cart.php">Корзина</a>
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

        $sql = "SELECT * FROM `foods`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $products=$stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php
        
            for ($i=0; $i < count($products); $i++) {
                $id = $products[$i]['id'];
                ?> 
            <div class="food-table">
                <p><?php echo $products[$i]['title']?></p>
                <p><?php echo $products[$i]['item']?></p>
                <img src="<?php echo $products[$i]['img']?>" alt="">
                <p><?php echo $products[$i]['price']?>₽</p>
                <a class="buy-button" href="<?php echo "script/add_cart.php?id=$id";?>">Купить</a>
            </div>
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