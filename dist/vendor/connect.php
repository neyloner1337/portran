<?php

    $connect = mysqli_connect('localhost:3306', 'root', '', 'registration');

    if (!$connect) {
        die('Error connect to DataBase');
    }