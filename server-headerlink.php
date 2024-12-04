<?php
session_start();
if (!$_SESSION['auth']){
    header('Location: '.'login.php');
}
elseif($_SESSION["admin"]){
    header('Location: '.'lk-admin.php');
}
else{
    header('Location: '.'lk-user.php');
}
?>