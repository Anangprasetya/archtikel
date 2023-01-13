<!doctype html>
<html lang="Artikel">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NVL</title>
    <script src="<?= BASEURL . 'js/app.js'; ?>" defer></script>

    <link href="<?= BASEURL . 'css/app.css'; ?>" rel="stylesheet">
    <link rel="icon" href="<?= BASEURL . 'assets/img/favicon.png'; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/bootstrap.min.css'; ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/style.css'; ?>">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/all.css' ?>">

    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/flaticon.css' ?>">
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/themify-icons.css' ?>">

    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= BASEURL . 'assets/css/magnific-popup.css' ?>">

</head>

<body>


    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Apakah anda ingin menggunakan Dashboard?</h2>
                            <p>Ayo konsisten melakukan upload artikel
                                Serta lakukan analisa perkembangan pada dasboard anda</p>
                            <a href="<?= BASEURL; ?>" class="btn_3">Home</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Selamat Datang ! <br>
                                Silahkan Login Sekarang</h3>

                            <?php Message::getTemplateMessage(); ?>
                            <form method="POST" action="<?= BASEURL . 'account/proses_login' ?>">
                                <div class="col-md-12 form-group p_star">

                                    <input id="username" type="text" class="form-control" name="username" required autofocus placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Masuk
                                    </button>

                                    <a class="lost_pass" href="<?= BASEURL . 'account/register' ?>">
                                        Belum punya akun ? klik disini
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->




    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Aceh &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> CODE NVL | Link Blogger <a href="https://pelajaransekolahpintar.blogspot.com/" target="_blank">nvl livewire</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        <p>
                            <a href="">Disclaimer</a>
                            <a href="">Privacy Policy</a>
                        </p>

                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


</body>

</html>