<?php

    session_start(); //Запускаем сессию, для вызова $_SESSION, чтобы сообщение об ошибке появлялось
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user =  mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = `$email` AND `password` = `$password` ");
    
    $user = $check_user->fetch_assoc();
    if(count($user) == 0 ) {
        echo "Логин или пороль не найден";
        exit();
    } 

    print_r($user);
    exit();

    


    // if (mysqli_num_rows($check_user) > 0){

    //     $user = mysqli_fetch_assoc($check_user);
    //     header('Location:../../index.html');
    // }   else {
    //     $_SESSION['message-error-singin'] = 'Неверный логин или пороль';
    // }