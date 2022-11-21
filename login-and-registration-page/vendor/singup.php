<?php

    session_start(); //Запускаем сессию, для вызова $_SESSION, чтобы сообщение об ошибке появлялось
    require_once 'connect.php';
    
    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    
    if ($password === $password_confirm) {
        
        $password = md5($password);
        
        mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES (NULL, '$email', '$password', '$name')");
        
        $_SESSION['message'] = 'Вы успешно зарегистрировались!';
        header('Location:../../index.html');
    } else {
        $_SESSION['message-error'] = 'Пароль не совпадает';
        header('Location:../reg.php');
    }