<?php
$email = '';
$pass1 = '';
$pass2 = '';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
$email = filter_input(
  INPUT_POST,
  'email',
  FILTER_VALIDATE_EMAIL 
);

$pass= $_POST['pass'] ?? '';

$_SESSION['message'] = [];
if( !$email ) {
  $_SESSION['message'][] = 'Задайте корректный емейл для входа';  
  header('Location: /art-page-folder/prosto-registracia/index.php');
  exit;
}
if( !$pass ) {
  $_SESSION['message'][] = 'Задайте пароль для входа';
  header('Location: /art-page-folder/prosto-registracia/index.php');
  exit;
}

$query = "SELECT idusers, email, pass, verified FROM users WHERE email=?";
if ($stmt = mysqli_prepare($db, $query)) {

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $idusers, $emailDB, $passDB, $verifiedDB);
  mysqli_stmt_fetch($stmt);

  if( $verifiedDB == 'N' ){
    $_SESSION['message'][] = 'До входа подтвердите регистрацию -
   нажмите на ссылку в электронной почте';
    header('Location: /art-page-folder/prosto-registracia/index.php');
    exit;
  }

  if( password_verify($pass, $passDB)  ){
    $_SESSION['username'] = $email;
    header('Location: /art-page-folder/prosto-registracia/index.php');
    exit;    
  }
  $_SESSION['message'][] = 'Пароль неверный';
  header('Location: /art-page-folder/prosto-registracia/index.php');
  exit; 
}

}