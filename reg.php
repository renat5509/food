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
            <a href="">Контакты</a>
        </div>
    </header>
    <main>
        <form action="script/do_reg.php" method="POST">
            <h3>Регистрация</h3>
            <label for="name">Имя</label>
            <input name="name" type="text" placeholder="name">
            <label for="email">Почта</label>
            <input name="email" type="email" placeholder="email" required>
            <label for="password">Пароль</label>
            <input name="password" type="password" placeholder="password" required>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </main>
    <footer>
        <p>Подписаться на нас</p>
        <input type="email" placeholder="email">
        <button type="submit">Подписаться</button>
    </footer>
</body>
</html>