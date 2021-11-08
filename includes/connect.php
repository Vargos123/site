<?php

$connect = mysqli_connect('mysql-56800-0.cloudclusters.net', 'admin', '6oMYUMPw', 'menote', '18800', 'utf8');

    if (!$connect) {        
        die('Error connect to DataBase!');
    }