<?php
    session_start();
    
    if(!$_SESSION['user']){
        header('Location: index.html');
    }
    
    include "./includes/connect.php";
    include "./includes/editnotes.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>MeNote</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body> 
    <header class="header">
        <div class="container">

            <div class="header__inner">
                <div class="header__top">

                    <a class="logo" href="index.php">
                        <img class="logo__img" src="images/logo.png" alt="ERROR">
                    </a>

                    <div class="header__logout">
                        <a href="includes/logout.php" class="header__logout-button">Выйти</a>
                    </div>

                </div>
            </div>
            


            
            <div class="header__content">
                <div class="header__descr">
                    <div class="col">
                        <form action="includes/noteread.php" class="header__form" method="post">
                            <div class="mb-3">
                              <label for="title" class="form-label" style="color: #a274fc; font-size: 40px; font-weight:bold">Название</label>
                              <input minlength = "4" maxlength = "25" required type="text" class="form-control" id="title" placeholder="Введите название..." name="title" >                            
                            </div>
                            <div class="mb-3">
                                <label for="descr" class="form-label" style="color: #a274fc; font-size: 40px; font-weight:bold">Сообщение</label>
                                <textarea minlength = "4" maxlength = "500" style = "resize: none;" required class="form-control" id="descr" rows="3" placeholder="Введите сообщение..." name="descr"></textarea>
                            </div>
                            <button type="submit" class="btn-saved" name="submit" style="font-size: 25px;">Сохранить</button>
                        </form>
                    </div>
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


            <div class="container__message-box">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="container__text">Заметки</h1>
                        <?php 
                            $namebaze = $_SESSION['user']["login"];
                            $sql = "SELECT * FROM `$namebaze`";
                            $noonenotes=true;
                            $res=mysqli_query($connect, $sql);
                            while($fetch=mysqli_fetch_assoc($res)){
                                $noonenotes=false;
                                echo '<div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #a274fc; font-size: 40px; font-style: oblique;">'.$fetch["title"].'</h5>
                                        <p class="card-text" style="color: #a274fc; font-size: 25px; font-style: italic;">'.$fetch["description"].'</p>
                                        <button type="button" class="btn btn-primary edit" data-bs-toggle="modal" data-bs-target="#exampleModal" id="'.$fetch["id"].'">Редактировать</button>
                                        <a href="includes/delete.php?id='.$fetch["id"].'" class="btn btn-danger">Удалить</a>
                                    </div>
                                </div>';
                            }
                            if($noonenotes){
                                echo '<div class="card my-3">
                                    <div class="card-body">
                                      <h5 class="card-title" style="color: #a274fc; font-size: 40px; font-style: oblique;">Название:</h5>
                                      <p class="card-text" style="color: #a274fc; font-size: 25px; font-style: italic;">У вас еще нет заметок!</p>
                                    </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>


            
                                     
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </header>
    <script>
    const edit=document.querySelectorAll(".edit");
    const title=document.getElementById("title");
    const descr=document.getElementById("descr");
    const hiddeninput=document.getElementById("hidden");
    edit.forEach(element => {
        element.addEventListener("click", ()=>{
            const titleMessage=element.parentElement.children[0].innerText;
            const descrip=element.parentElement.children[1].innerText;
            title.value=titleMessage;
            descr.value=descrip;
            hiddeninput.value=element.id;
            console.log(hiddeninput);
        });
    });
</script>
</body>
</html>