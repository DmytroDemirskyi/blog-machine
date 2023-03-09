<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sign-in.css" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">

        <div class="sign-in">
            <form action="" class="sign-in-form" method="post">
            <p><label>login<input  type="text" name="login"></label></p>
            <p><label>Password<input  type="password" name="password"></label></p>
            <p><button>Enter</button></p>
            </form>
        </div>

        <?php 

        if(isset($_POST['sign-exit'])){
            if($_POST['sign-exit'] == 1) {
                $_SESSION['enter'] = 0;
            }
        }

if($_POST['login'] == "admin") {
    if($_POST['password'] == "1234") {
        echo "Вы авторизовались";
        $_SESSION['enter'] = 1;
        header('location: index.php');
} elseif($_POST['password'] == "") {
    echo "Введите Пароль";
} elseif($_POST['password'] != "1234") {
    echo "Неправильный пароль";
}
} elseif($_POST['login'] == "") {
    echo "Введите Логин";
} else {
    echo "Не правильный логин";
}



?>



        </div>
    </div>
</body>
</html>