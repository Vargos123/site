<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MeNote</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
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

            <div class="header__content">
                <div class="header__descr">
                    <p class="header__desription">MeNote - лучшая программа для создания заметок</p>
                    <a class="header__button" href="includes/counter.php">Download</a>
                    <table class="table__download">
                       <tr>
                        <td class="table__text"><img id="btnSend" class="download__img" src="images/download.png" alt="ERROR"></td>
                        <td class="table__text" style="font-size: 20px;">Cкачиваний:</td>
                        <td class="table__text" style="font-size: 25px;"><?php echo file_get_contents('includes/counter.txt');?></td>
                       </tr>
                    </table> 
                </div>  
                <div class="image__notes">
                    <img class="logo2__img" src="images/logo2.png" alt="ERROR">  
                </div>  
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
    
    <script>
            
    </script>
</body>
</html>