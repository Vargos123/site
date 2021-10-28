<?php
    session_start();

    if($_SESSION['user']){
        header('Location: profile.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MeNote</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style-logandreg.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <!--header-->
            <div class="header__inner">
                <div class="header__top">
                    <a class="logo" href="index.php">
                        <img class="logo__img" src="images/logo.png" alt="ERROR">
                    </a>
                    <div class="header__login-register">
                        <a href="login.php" class="header__login-button">Login</a>
                        <a href="register.php" class="header__register-button">Register</a>
                    </div>
                </div>
            </div>
            <!--header-->


            <div class="content__center">
                <div class="header__descr">
                    <h1 class="content__login">Авторизация</h1>
                    <form action="includes/signin.php" class="content__form" method="post">
                            <div class="txt_field">
                                <input minlength = "4" maxlength = "50" autocomplete="off" name="login" class="content__input" type="text" required>
                                <label class="content__label">Логин</label>
                            </div>
                            <div class="txt_field">
                                <input minlength = "4" maxlength = "50" name="password" class="content__input" type="password" required>
                                <label class="content__label">Пароль</label>
                            </div>
                            <input type="submit" value="Войти"> 
                            <div class="signin__link">Нет аккаунта? <a href="register.php ">Регистрация</a></div>         
                    </form>                   
                </div>                                 
                <div class="message__error">
                    <?php
                    if($_SESSION['message']){
                        echo '<p class="message"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>   
                </div>                          
            </div> 
        </div>
    </header>
    
    <footer>
        <!-- footer -->
            <div class="footer__inndown">
                <div class="footer__top">
                    <p class="footer__text-MeNote">© 2021     MeNote</p>
                    <div class="footer__imgandemail">
                        <img class="footer__img-email" src="images/email.png" alt="ERROR">
                        <p class="footer__text-email">menoteapp@gmail.com</p>
                    </div>         
                </div> 
    </footer>
</body>
</html>