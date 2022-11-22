<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вход</title>
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
    <link rel="stylesheet" href="../../../css/style.css" />
    <!-- CSS end-->
</head>

<body class="text-center container">

    <div class="row bg-light">
        <div class="col-lg-6 col-md-8 mx-auto">
            <main class="form-signin  py-5">
                <h1 class="h3 mb-3 fw-normal">LOCALIZATION</h1>
                <div class="row">
                    <div class="col-10 d-flex justify-content-start">
                        <h5 class="mb-3 fw-normal">Регистрация</h1>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <a class="btn btn-close" href="index.php"></a>
                    </div>
                </div>

                <form method="POST" action="?signup">
                    <div class="form-floating">
                        <input name="email" id="email" autocomplete="off" type="email" class="form-control"
                            placeholder="name@example.com" />
                        <label for="email ">Email:</label>
                    </div>
                    <div class="form-floating">

                        <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Password" />
                        <label for="pass1 floatingPassword">Пароль:</label>
                    </div>
                    <div class="form-floating">

                        <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Password" />
                        <label for="pass2 floatingPassword">Повтор пароля:</label>
                    </div>

                    <div class="form-floating py-3">
                        <input class="btn btn-success px-5" type="submit" />
                    </div>
                </form>
            </main>

        </div>
    </div>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>