<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="style/reg.css">
    <title>WEBnet</title>
</head>
<body>
    <header class="header">
        <a href="index.php">
            <p class="header__title">WEBnet</p>
        </a>
        <a href="server-headerlink.php">
            <nav class="header__nav">
                <p class="header__p">Личный кабинет</p>
                <img src="media/lk.png" alt="Личный кабинет" class="header__img">
            </nav>
        </a>
    </header>
    <main class="main">
        <div class="wrapper">
            <div class="inner">
                <form action="server.php" method="post">
                    <h1>Войти в аккаунт</h1>
                    <div class="form-fields">
                        <input type="text" name="login" id="login" placeholder="login" required>
                        <input type="password" id="password" name="password" placeholder="password" required>
                        <input type="tel" name="tel" id="tel" placeholder="tel" required>
                        <input type="email" name="mail" id="mail" placeholder="mail" required>
                        <input type="text" name="name" id="name" placeholder="name" required>
                        <input type="text" name="surname" id="surname" placeholder="surname" required>
                        <input type="text" name="patronymic" id="patronymic" placeholder="patronymic" required>
                        <input type="hidden" name="source" value="reg">

                    </div>
                    <div class="form-buttons">
                        <input type="submit" value="Зарегистрироваться">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>