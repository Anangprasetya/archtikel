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
      .novelia-bg{
        color: white;
        background-color: rgb(56, 180, 218);
      }
      a:hover{
        opacity: 0.5;
      }
      .login{
        padding-left: 70%;
      }
      .novelia{
        font: bold 42px "Abril Fatface";
        color: rgb(236, 237, 233);
      }
      .gradient-text {
          background-image: linear-gradient(60deg, rgb(38, 92, 101), rgb(236, 237, 233));
          background-clip: text;
          -webkit-background-clip: text;
          color: transparent;
        }
        .btn-reg{
          color: rgb(56, 180, 218);
          background-color: rgb(38, 92, 101);
        }
        .btn-reg:hover{
          background-color: white;
          color: black;
        }
    </style>

</head>

<body>
  <header class="p-3 novelia-bg">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> 

    <!-- //Navbar Login -->
    <?php if (isset($_SESSION["user_login"])) : ?>
        <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a> -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?= BASEURL ?>" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="<?= BASEURL . 'artikel/' ?>" class="nav-link px-2 text-white">Notifikasi</a></li>
            <li><a href="<?= BASEURL . 'artikel/' ?>" class="nav-link px-2 text-white">Artikel</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark " placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
            <a href="<?= BASEURL . 'account/out' ?>" class="btn btn-reg">Logout</a>
        </div>

    <?php else : ?>

    <!-- //Navbar Login2 -->
    
      <h2 class="novelia">Novelia</h2>
        <div class="text-end login">
            <a href="<?= BASEURL . 'account/' ?>" class="btn btn-outline-light me-2 btn-blue">Login</a>
            <a href="<?= BASEURL . 'account/register' ?>" class="btn btn-reg">Register</a>
        </div>

    <?php endif; ?>
    </div>
    </div>
  </header>