<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- favicon end-->
    <!-- icons -->
    <script src="https://kit.fontawesome.com/3eee4f0009.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- icons end -->
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS end-->
</head>

<body>
    <div class="container mt-4">
        <h1>Форма регистрации</h1>
        <form action="vendor/singup.php" method="post">
            <input type="email" class="form-control" name="email" placeholder="Введите логин" /><br />
            <input type="text" class="form-control" name="name" placeholder="Введите имя" /><br />
            <input type="password" class="form-control" name="password" placeholder="Введите пароль" /><br />
            <input type="password" class="form-control" name="password_confirm" placeholder="Повторно введите пароль
            <?php
              if(isset($_SESSION['message-error'])) { 
                echo $_SESSION['message-error'];
              }
              unset($_SESSION['message-error']);
            ?>" />

            <br />
            <button class="btn btn-success" type="submit">
                Зарегистрироваться
            </button>
            <br>
            <small class="text-success">
                <?php
                  if(isset($_SESSION['message'])) { //isset() - если сущесвует ()
                    echo $_SESSION['message'];
                  }
                  unset($_SESSION['message']);
                ?>
            </small>
        </form>
    </div>
</body>

</html>