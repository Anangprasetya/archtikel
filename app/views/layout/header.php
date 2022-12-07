<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/id.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#kategori').select2({
                placeholder: "Pilih Kategori",
                allowClear: true,
                language: "id"
            });
        });
    </script>
    <style>
      a:hover{
        opacity: 0.5;
      }
      .login{
        padding-left: 84%;
      }
    </style>

</head>

<body>
        
    <!-- //Navbar Login -->
    <?php if (isset($_SESSION["user_login"])) : ?>

        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a> -->

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="<?= BASEURL ?>" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="<?= BASEURL . 'artikel/' ?>" class="nav-link px-2 text-white">Notifikasi</a></li>
                        <li><a href="<?= BASEURL . 'artikel/' ?>" class="nav-link px-2 text-white">Artikel</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end">
                        <a href="<?= BASEURL . 'account/out' ?>" class="btn btn-warning">Logout</a>
                    </div>
                </div>
            </div>
        </header>

    <?php else : ?>

    <!-- //Navbar Login2 -->
    <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <div class="text-end login">
                        <a href="<?= BASEURL . 'account/' ?>" class="btn btn-outline-light me-2">Login</a>
                        <a href="<?= BASEURL . 'account/register' ?>" class="btn btn-warning">Register</a>
                    </div>
                </div>
            </div>
        </header>
    <?php endif; ?>