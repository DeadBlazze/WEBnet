<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="style/login.css">
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
    <?php
    session_start();
    if(!array_search('auth', $_SESSION)) {
        echo <<<HERE
        <main class="main">
            <div class="wrapper">
                <div class="inner">
                    <form action="server.php" method="post">
                        <h1>Войти в аккаунт</h1>
                        <div class="form-fields">
                            <input type="text" name="login" id="login" placeholder="login" required>
                            <input type="password" name="password" id="password"  placeholder="password" required>
                            <input type="hidden" name="source" value="login">
                        </div>
                        <div class="form-buttons">
                            <a href="reg.php">
                                Зарегистрироваться
                            </a>
                            <input type="submit" value="Войти">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        HERE;
         
    }
    if(array_search('response', $_SESSION)) {
        echo "<h1>".$_SESSION["response"]."</h1>";
    }
    
    ?>
</body>
</html>