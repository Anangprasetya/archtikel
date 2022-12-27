<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>ArchTikel</title>
  <link rel="icon" href="<?php echo BASEURL . 'img/fav_novelia.png' ?>" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

  <!-- PEMANGGILAN CSS DI LOCAL -->


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
    .novelia-bg {
      color: white;
      background-color: rgb(56, 180, 218);
    }

    a:hover {
      opacity: 0.5;
    }

    .login {
      padding-left: 67%;
    }

    .novelia {
      font: bold 42px "Abril Fatface";
      color: rgb(236, 237, 233);
    }

    .gradient-text {
      background-image: linear-gradient(60deg, rgb(38, 92, 101), rgb(236, 237, 233));
      background-clip: text;
      -webkit-background-clip: text;
      color: transparent;
    }

    .btn-reg {
      color: rgb(56, 180, 218);
      background-color: rgb(38, 92, 101);
    }

    .btn-reg:hover {
      background-color: white;
      color: black;
    }

    img {
      width: 45px;
      margin: 7px;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <?php if (isset($_SESSION["user_login"])) : ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
      <div class="container-md">
        <a class="navbar-brand mb-0 h1" href="<?= BASEURL ?>">ArchTikel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Notifikasi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Artikel
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= BASEURL . 'artikel/buat' ?>">Buat Artikel</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL . 'artikel/draf' ?>">Draf Artikel</a></li>
                <li><a class="dropdown-item" href="<?= BASEURL . 'artikel/posting' ?>">Posting Artikel</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="<?= BASEURL . 'artikel' ?>">Semua Artikel</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <a href="<?= BASEURL . 'account/out' ?>" class="btn btn-outline-light">Logout</a>
          </form>
        </div>
      </div>
    </nav>
  <?php else : ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary mb-3">
      <div class="container-md">
        <a class="navbar-brand mb-0 h1" href="<?= BASEURL ?>">ArchTikel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">Home</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="<?= BASEURL . 'account/' ?>" class="btn btn-outline-light">Login</a>
            <a href="<?= BASEURL . 'account/register' ?>" class="btn btn-outline-light ms-2">Register</a>
          </form>
        </div>
      </div>
    </nav>
  <?php endif; ?>