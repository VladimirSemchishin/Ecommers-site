<!-- <h1>Личный кабинет</h1>
<a href="?logout">Выйти</a>

<div>тут подключаются нужные файлы и выполняется любая работа...</div> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png" />
    <link rel="manifest" href="../favicon/site.webmanifest" />
    <!-- favicon end-->
    <!-- icons -->
    <script src="https://kit.fontawesome.com/3eee4f0009.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- icons end -->
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- CSS end-->
</head>

<body>
    <!-- Naavigation -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md d-flex flex-row-reverse justify-content-between">
            <div>
                <a href="basket-folder/basket.html"><i class="bi bi-cart4 text-white btn"></i></a>

                <a href="?logout"><i class="bi bi-x-square text-white btn"></i></a>
            </div>

            <a class="navbar-brand center" href="../index.html">LOCALIZATION</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <a href="index.html" class="nav-link">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            <strong>Меню</strong>
                        </h5>
                    </a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body py-0">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="basket-folder/basket.html">Корзина</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Каталог
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Для мужчин</a></li>
                                <li><a class="dropdown-item" href="#">Для женщин</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Другое</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                HOT SALES
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="#">Промо-коды</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">BLACK FRIDAY</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Бренды, одежда, промо-коды..."
                            aria-label="Search" />
                        <button class="btn btn-outline-secondary" type="submit">
                            Найти
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- Naavigation end -->
    <!-- О дизайнере -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <div id="carouselExampleDark" class="container-fluid carousel carousel-dark slide px-0"
                    data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../photo/photo1.jpeg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../photo/photo2.jpeg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../photo/photo5.jpeg" class="d-block w-100" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- конец фотографий дизайнера -->
            <!-- Описание дизайнера -->
            <div class="col-lg-6">
                <h1 class="item-title text-center">Хидэо Кодзима</h1>
                <span class="item-brand card text-center py-2">4 курс Московского Дизайнерского</span>
                <p>
                    Хидэо Кодзи́ма — японский геймдизайнер, геймдиректор, сценарист,
                    продюсер и актёр. Кодзима известен своеобразным авторским подходом к
                    созданию игр; ещё до прихода в игровую индустрию он увлекался
                    литературой и кинематографом и позже рассматривал разработку игр как
                    новую возможность для художественного творчества
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="h-100 p-5 text-white bg-dark rounded-3">
                            <h2>Дизайнер modern-гиперпанк</h2>
                            <p>
                                В основном я занимаюсь одеждой и тем самым самовыражаюсь <br>
                                В моем портфолио также есть картины и росписи стен, если понравился арт - то обязательно
                                напиши в обсуждения.<br>
                                Так же не забудь подписаться на мои обновления в ВК и Telegram
                            </p>
                            <div class="text-center ">

                                <a href="#" target="_blank" class="btn btn-outline-light">ВКонтакте</a>
                                <a href="#" target="_blank" class="btn btn-outline-info ">Telegram</a>
                                <a href="#" target="_blank" class="btn btn-outline-info ">Добавить в интересные</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Альбом -->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Заполнитель: Миниатюра"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>

                        <div class="card-body">
                            <p class="card-text">
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">Это более широкая карточка со вспомогательным
                                        текстом
                                        ниже, который является естественным переходом к
                                        дополнительному контенту. </font>
                                    <font style="vertical-align: inherit">Этот контент немного длиннее.</font>
                                </font>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Вид</font>
                                        </font>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <font style="vertical-align: inherit">
                                            <font style="vertical-align: inherit">Редактировать</font>
                                        </font>
                                    </button>
                                </div>
                                <small class="text-muted">
                                    <font style="vertical-align: inherit">
                                        <font style="vertical-align: inherit">9 минут</font>
                                    </font>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container">
        <footer class="border-top">
            <h5 class="text-center py-3">Подробнее</h5>
            <div class="row text-center py-3">
                <div class="col-12 col-md-4 mb-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">О нас</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="link-dark" href="https://twitter.com/?lang=ru" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a>

                            <a class="link-dark" href="https://vk.com/" target="_blank"><i
                                    class="fa-brands fa-vk"></i></a>
                            <a class="link-dark" href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>

                            <a class="link-dark" href="https://github.com/VladimirSemchishin" target="_blank"><i
                                    class="fa-brands fa-github"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 mb-3 col-sm-4">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">Контакты</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="link-dark" href="https://twitter.com/?lang=ru" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a>

                            <a class="link-dark" href="https://vk.com/" target="_blank"><i
                                    class="fa-brands fa-vk"></i></a>
                            <a class="link-dark" href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>

                            <a class="link-dark" href="https://github.com/VladimirSemchishin" target="_blank"><i
                                    class="fa-brands fa-github"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-md-4 mb-3">
                    <h5><br /></h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">Рассылка</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a class="link-dark" href="https://twitter.com/?lang=ru" target="_blank"><i
                                    class="fa-brands fa-twitter"></i></a>

                            <a class="link-dark" href="https://vk.com/" target="_blank"><i
                                    class="fa-brands fa-vk"></i></a>
                            <a class="link-dark" href="https://www.instagram.com/" target="_blank"><i
                                    class="fa-brands fa-instagram"></i></a>

                            <a class="link-dark" href="https://github.com/VladimirSemchishin" target="_blank"><i
                                    class="fa-brands fa-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <!-- VK -->
                        <a class="link-dark" href="https://vk.com/" target="_blank"><i class="fa-brands fa-vk"></i></a>
                    </li>
                    <li class="ms-3">
                        <!-- Inst -->
                        <a class="link-dark" href="https://www.instagram.com/" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="ms-3">
                        <!-- Twitter -->
                        <a class="link-dark" href="https://twitter.com/?lang=ru" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>