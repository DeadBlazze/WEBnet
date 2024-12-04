<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="style/index.css">
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
            <div class="courses">
                <div class="course">
                    <h1>Основы веб-разработки</h1>
                    <p>Основы HTML и CSS. ·Cтилизация веб-страниц с помощью CSS.Основы языка JavaScript. Работа с DOM. Обработка событий. Обзор популярных фреймворков и библиотек. </p>
                    <a href="1course.php" class="index-button">
                        <button class="courses__button">Записаться</button>
                    </a>
                </div>
                <div class="course">
                    <h1>Веб-дизайн</h1>
                    <p>Теория цвета. Типографика. Композиция. Знакомство с популярными графическими редакторами.· Инструменты для создания макетов. Особенности адаптивного дизайна. Адаптация макета под разные устройства.</p>
                    <a href="2course.php" class="index-button">
                        <button class="courses__button">Записаться</button>
                    </a>
                </div>
                <div class="course">
                    <h1>Веб-разработка</h1>
                    <p>Изучение React и Angular. Сравнение этих фреймворков. Основы Node.js и Express. Создание серверных приложений. Работа с базами данных. SQL и NoSQL. Что такое API. Как создавать и использовать API.</p>
                    <a href="3course.php" class="index-button">
                        <button class="courses__button">Записаться</button>
                    </a>
                </div>
                <div class="course">
                    <h1>Тестирование веб-приложений</h1>
                    <p>Функциональное тестирование. Нагрузочное тестирование. Юзабилити-тестирование. Автоматизация с помощью Selenium. Методы отладки. Генерация отчётов о тестировании.</p>
                    <a href="4course.php" class="index-button">
                        <button class="courses__button">Записаться</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>