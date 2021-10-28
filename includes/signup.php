<?php
    session_start();
    require_once 'connect.php';
    

    $login = $_POST['login'];
    $password = $_POST['password'];

    $chech_Login = mysqli_query($connect, "SELECT * FROM `menoteapp` WHERE `login` = '$login'");

    if(mysqli_num_rows($chech_Login) > 0){
        $_SESSION['message'] = 'Данный логин уже зарегистрирован!';
        header('Location: ../register.php');
    }else{
        mysqli_query($connect, "INSERT INTO `menoteapp` (`login`, `password`) VALUES ('$login', '$password')");
        mysqli_query($connect, "CREATE TABLE `$login` LIKE primertable");
        $_SESSION['message'] = 'Вы успешно зарегистрировались';
        header('Location: ../register.php');
    }
