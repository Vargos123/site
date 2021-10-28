<?php

$connect = mysqli_connect('mysql-55881-0.cloudclusters.net', 'admin', '4rSxWsEh', 'menote', '19909', 'utf8');

    if (!$connect) {        
        die('Error connect to DataBase!');
    }