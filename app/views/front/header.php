<!doctype html>
<html lang="Aplikasi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NVL</title>
    <script src="<?= BASEURL . 'js/app.js' ?>" defer></script>

    <link href="<?= BASEURL . 'css/app.css' ?>" rel="stylesheet">
    <link rel="icon" href="<?= BASEURL . 'assets/img/favicon.png' ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/bootstrap.min.css' ?>">

    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/animate.css' ?>">

    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/owl.carousel.min.css' ?>">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/all.css' ?>">

    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/flaticon.css' ?>">
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/themify-icons.css' ?>">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/magnific-popup.css' ?>">

    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/slick.css' ?>">

    <!-- style CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/style.css' ?>">

    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/nice-select.css' ?>">


    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/price_rangs.css' ?>">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?= BASEURL; ?>"> <img src="<?= BASEURL . 'assets/img/logo.png'; ?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= BASEURL; ?>">Beranda</a>
                                </li>
                                <?php if (isset($_SESSION["user_login"])) : ?>
                                <?php else : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= BASEURL . 'account/' ?>">Login</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


        <div>
            <div class="search_input" id="search_input_box">
                <div class="container ">
                    <form class="d-flex justify-content-between search-inner">
                        <input wire:model="search" type="search" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>
        </div>


    </header>

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <div class="text-color">
                                        <h5>NVL Code</h5>
                                        <!-- <h1>Pantang Menyerah</h1> -->
                                    </div>
                                    <a href="<?= BASEURL; ?>" class="genric-btn link-border circle e-large">Artikel</a>

                                    <!-- <div class="input-group mb-3">
                                        <input type="search" class="form-control" placeholder='Judul desain'/>
                                        
                                        
                                        <div class="input-group-append">
                                            <button class="btn genric-btn primary circle space" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping here -->

    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row tengah">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/php.png'; ?>" alt="">
                        <h4>Php</h4>
                        <p>Bahasa pemograman.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/laravel.png'; ?>" alt="">
                        <h4>Laravel</h4>
                        <p>Framework.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/livewire.png'; ?>" alt="">
                        <h4>Livewire</h4>
                        <p>Frontend.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/mysql.png'; ?>" alt="">
                        <h4>Mysql</h4>
                        <p>Database.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/html.png'; ?>" alt="">
                        <h4>Html</h4>
                        <p>Markup.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/css.png'; ?>" alt="">
                        <h4>Css</h4>
                        <p>Style.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/bootstrap.png'; ?>" alt="">
                        <h4>Bootstrap</h4>
                        <p>Framework.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="<?= BASEURL . 'assets/img/icon/photoshop.png'; ?>" alt="">
                        <h4>Photoshop</h4>
                        <p>Editing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->