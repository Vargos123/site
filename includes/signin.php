<?php
    session_start();
    require_once 'connect.php';
    

    $login = $_POST['login'];
    $password = $_POST['password'];
    
            $chech_Login = mysqli_query($connect, "SELECT * FROM `menoteapp` WHERE `login` = '$login' AND `password` = '$password'");

    if(mysqli_num_rows($chech_Login) > 0)
    {
        $user = mysqli_fetch_assoc($chech_Login);
        $_SESSION['user'] = ["login" => $user['login']];
        header('Location: ../profile.php');        

    }else{
        $_SESSION['message'] = 'Вы ввели не верный Логин или пароль!';
        header('Location: ../login.php');
    }
