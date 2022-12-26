<div class="container-md">
    <div class="row">
        <div class="col-md-6">
            <h2>HOME</h2>
            <?php Message::getMessage(); ?>
            <h3>Selamat Datang <?php echo $_SESSION["user_login"]["nama"]; ?></h3>
        </div>
    </div>
</div>