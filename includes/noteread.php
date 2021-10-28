<?php
    session_start();
    require_once 'connect.php';

    if(isset($_POST["submit"])){
        $title=$_POST["title"];
        $descr=$_POST["descr"];
        $name = $_SESSION['user']['login'];
        $sql2="INSERT INTO `$name`(`title`, `description`) VALUES('$title', '$descr')";
        $res=mysqli_query($connect, $sql2);
        $_SESSION['message'] = 'Вы успешно добавили данные!';
            header('Location: ../profile.php');
        }