<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="style/lk-admin.css">
    <link rel="stylesheet" href="style/admin-edit.css">
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
<main>
<main class="main">
    <div class="wrapper">
        <div class="inner">
            <img src="media/user-icon.png" alt="" class="user-icon">
                <div class="name-flex" id="name-flex">
                    <h1 class="name" id="name" placeholder="name" class="name">user123</h1>
                    <label for="name"><a href="#" onclick="showInput('name-send', 'name-flex', this); return false;"><img class='pen' src="media/pen.png" alt=""></a></label>
                </div>
                <form>
                    <input type="text" name="name-send" id="name-send" placeholder="name" display="none">
                    <input type="text" name="login" id="login" placeholder="login" class="login" required>
                    <input type="password" id="password" name="password" placeholder="password" required>
                    <input type="tel" name="tel" id="tel" placeholder="tel" required>
                    <input type="email" name="mail" id="mail" placeholder="mail" required>
                    <input type="text" name="surname" id="surname" placeholder="surname" required>
                    <input type="text" name="patronymic" id="patronymic" placeholder="patronymic" required>
                    <input type="submit" value="Сохранить">
                </form>
                
        </div>
    </div>

</main>
<script>
    function showInput(id, text, btn) {
    document.getElementById(id).style.display = 'block';
    document.getElementById(text).style.display = 'none';
    // hide the link
    btn.style.display = 'none';
}
</script>
</body>
</html>