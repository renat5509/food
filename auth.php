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
            <a href="reg.php">Регистрация</a>
            <a href="">Контакты</a>
        </div>
    </header>
    <main>
        <form action="script/do_auth.php" method="POST">
            <h3>Авторизация</h3>
            <label for="email">Почта</label>
            <input name="email" type="email" placeholder="email" required>
            <label for="password">Пароль</label>
            <input name="password" type="password" placeholder="password" required>
            <button type="submit">Вход</button>
        </form>
    </main>
    <footer>
        <p>Подписаться на нас</p>
        <input type="email" placeholder="email">
        <button type="submit">Подписаться</button>
    </footer>
</body>
</html>