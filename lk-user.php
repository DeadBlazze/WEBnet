<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="style/lk-user.css">
    <title>Document</title>
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
            <?php 
            session_start();
            if(!array_search('auth', $_SESSION)) {
                header('Location: '.'login.php');
            }
            else echo <<< HERE
                <img src="media/user-icon.png" alt="" class="user-icon">
                <h1>user3472433243431</h1>
                <a href="">
                    <p>Изменить учётные данные</p>
                </a>
                <div class="lk-user__buttons">
                    <a href="logout.php"><button class="button-gray">Выйти</button></a>
                    <button>Список заявок</button>
                    <button>Список курсов</button>
                </div>
            HERE;
            ?>
        </div>
    </div>
</main>
</body>
</html>

