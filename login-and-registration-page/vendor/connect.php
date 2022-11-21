<?php
    // mysqli_connect
    $connect = mysqli_connect('localhost', 'root', '', 'localization_reg_bd');

    if (!$connect) {
        die('Error data base connect');
    }