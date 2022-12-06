<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Application</title>
    <link rel="stylesheet" href="">
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

</head>

<body>
    <ul>
        <li><a href="<?= BASEURL ?>">Home</a></li>
        <?php if (isset($_SESSION["user_login"])) : ?>
            <li><a href="<?= BASEURL . 'artikel/' ?>">Notifikasi</a></li>
            <li>
                <a href="<?= BASEURL . 'artikel/' ?>">Artikel</a>
                <ul>
                    <li><a href="<?= BASEURL . 'artikel/buat' ?>">Buat artikel baru</a></li>
                    <li><a href="<?= BASEURL . 'artikel/draf' ?>">Draf artikel</a></li>
                    <li><a href="<?= BASEURL . 'artikel/posting' ?>">Posting Artikel</a></li>
                </ul>
            </li>
            <li><a href="<?= BASEURL . 'account/out' ?>">Logout</a></li>
        <?php else : ?>
            <li><a href="<?= BASEURL . 'account/' ?>">Login</a></li>
            <li><a href="<?= BASEURL . 'account/register' ?>">Registrasi</a></li>
        <?php endif; ?>
    </ul>