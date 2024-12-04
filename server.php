<?php
session_start();

$mysql = new mysqli(hostname: "mysql-8.0",username: "root",password: "",database: "db_kursik");

if (!$_SESSION['auth']){

    // Регистрация
    if (($_POST['source']==="reg")){
        $login = $_POST['login'];
        $password = $_POST['password'];  
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
            // Проверка на повтор логинов
        $query = "SELECT * FROM users WHERE login='$login'";
        $res = mysqli_query($mysql, $query);
        $user = mysqli_fetch_assoc($res);
        if(!empty($user)){
            $_SESSION["response"] = "Такой логин уже занят";
            header('Location: '.'login.php');
            exit();
        }
        

        $stmt = $mysql->prepare("INSERT INTO users (`login`, `password`,`tel`,`mail`,`name`,`surname`,`patronymic`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $login, $password, $tel, $mail, $name, $surname, $patronymic);
        $stmt->execute();
        $_SESSION['auth'] = true;
        header('Location: '.'lk-user.php');
        exit();
    }
    
    // Авторизация
    else{
        if (empty($_POST['password']) or empty($_POST['login'])){
            $_SESSION["response"] = "Заполните поля формы";
            header('Location: '.'login.php');
            exit();
        }

        // Авторизация
        $login = $_POST['login'];
        $password = $_POST['password'];   
            // Точное совпадение
        $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
        $res = mysqli_query($mysql, $query);
        $user = mysqli_fetch_assoc($res);
        if (!empty($user)) {
            $_SESSION['auth'] = true;
            if($user['login']==="admin")      {
                $_SESSION["admin"] = true;
                header('Location: '.'lk-admin.php');
                exit();
            }
            else{
                header('Location: '.'lk-user.php');
                exit(); 
            }
        }
            // Частичное совпадение
        $query = "SELECT * FROM users WHERE login='$login' OR password='$password'";
        $res = mysqli_query($mysql, $query);
        $user = mysqli_fetch_assoc($res);
        if(!empty($user)){
            $_SESSION["response"] = "Логин или пароль введён неверно";
            header('Location: '.'login.php');
            exit();
        }
    }
}
else{
    $_SESSION["response"] = "Вы уже вошли в учётную запись";
    header('Location: '.'login.php');

}
    

// ?>