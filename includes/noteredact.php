<?php 

    session_start();
    require_once 'connect.php';
    if(isset($_POST["submit"])){
        $title=$_POST["title"];
        $descr=$_POST["descr"];
        $user=$_SESSION['user']["login"];
        $id=$_POST["hidden"];
        $sql="UPDATE `$user` SET `id`=$id,`title`= $title,`description`= $descr WHERE `id`= $id";
        $res = mysqli_query($connect, $sql);
    
        $_SESSION['message'] = 'Вы успешно удалили запись!';
        header('Location: ../profile.php');
        
    }
    
?>