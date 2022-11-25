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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../my-little-world/css/style.css" />
    <!-- CSS end-->
</head>

<body>
    <!-- Naavigation -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md d-flex flex-row-reverse justify-content-between">
            <div>
                <a href="../my-little-world/basket-little-world.html"><i class="bi bi-cart4 text-white btn"></i></a>

                <a href="?logout"><i class="bi bi-x-square text-white btn"></i></a>
            </div>

            <a class="navbar-brand center" href="../my-little-world/index-little-world.html">LOCALIZATION</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <a href="./my-little-world/index-little-world.html" class="nav-link">
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
                            <a class="nav-link active" aria-current="page"
                                href="../my-little-world/index-little-world.html">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="../my-little-world/basket-little-world.html">Корзина</a>
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
            <div class="col-lg-6 py-3">
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
                        <div class="carousel-item active my-photo-carusel" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../my-little-world/photo/photo1.jpeg" class="d-block w-100 rounded"
                                        alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../my-little-world/photo/photo2.jpeg" class="d-block w-100 rounded"
                                        alt="..." />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="row">
                                <div class="col p-0 my-photo-carusel">
                                    <img src="../my-little-world/photo/photo4.jpeg" class="d-block w-100 rounded"
                                        alt="..." />
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
                <div class="lead">Дизайнер</div>
                <h1 class="item-title text-center border-top border-bottom">Хидэо Кодзима</h1>
                <figure class="text-end">
                    <blockquote class="blockquote">
                        <p>Здесь могла быть какаято очкень крутая фраза</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Но я ее забыл
                    </figcaption>
                </figure>
                <div class="bg-light">
                    <br>
                </div>
                <div class="row py-2">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home">О дизайнере</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list"
                                data-bs-toggle="list" href="#list-profile" role="tab"
                                aria-controls="profile">Заслуги</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list"
                                data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Идея</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                aria-labelledby="list-home-list">Я японский геймдизайнер, геймдиректор, сценарист,
                                продюсер и актёр, известен своеобразным авторским подходом к созданию игр. Ещё до
                                прихода в игровую индустрию увлекался литературой и кинематографом и позже рассматривал
                                разработку игр как новую возможность для художественного творчества.</div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                aria-labelledby="list-profile-list"> Премия BAFTA — Приз человеку года, The Game Award -
                                Industry Icon Award</div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                aria-labelledby="list-messages-list">Считаю стелс-игры крутыми и люблю серию Metal Gear
                                Solid</div>
                        </div>
                    </div>
                </div>
                <div class="bg-light">
                    <br>
                </div>
                <blockquote class="blockquote py-2">
                    <p>Email сотрудничества:</p>
                </blockquote>
                <div class="text-end border-bottom ">
                    <div class="btn-group text-center">
                        <a href="#" class="btn btn-dark active" aria-current="page">Менеджер</a>
                        <a href="#" class="btn btn-dark">Личная почта</a>
                    </div>
                </div>
                <blockquote class="blockquote py-2">
                    <p>Мои социальные сети:</p>
                </blockquote>
                <div class="text-end border-bottom ">
                    <div class="btn-group text-center">
                        <a href="#" class="btn btn-dark active" aria-current="page">Telegram</a>
                        <a href="#" class="btn btn-dark">ВК</a>
                        <a href="#" class="btn btn-dark">Instargram</a>
                    </div>
                </div>
                <blockquote class="blockquote py-2">
                    <p>Мои видео:</p>
                </blockquote>
                <div class="text-end border-bottom ">
                    <div class="btn-group text-center">
                        <a href="#" class="btn btn-dark active" aria-current="page">YouTub</a>
                        <a href="#" class="btn btn-dark">TikTok</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Альбом -->
    <div class="text-center ">
        <h1 class="display-6"><strong>Мои работы</strong></h1>
    </div>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Актуальные</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Прошлые
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Купить</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card shadow-sm">
                                    <img class="bd-placeholder-img card-img-top" width="100"
                                        src="../my-little-world/photo/portfolio-1.jpeg"
                                        aria-label="Заполнитель: Миниатюра" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">

                                    </img>
                                    <div class="card-body">
                                        <h5 class="card-title">БИЧ</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Corrupti dicta inventore rem minus consequatur neque debitis
                                            dignissimos autem odit dolorum.
                                        </p>


                                        <a href="../my-little-world/page-card-little-world.html" target="_blank"
                                            class="btn btn-outline-secondary">Узнать больше</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                ...
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
</body>

</html>