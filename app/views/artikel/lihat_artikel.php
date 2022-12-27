<div class="container-md">
    <div class="row">


        <h4>Judul : </h4>
        <h1><?php echo $data["artikel"]["judul_posting"]; ?></h1>
        <h4>Sejak : </h4>
        <p><?php echo $data["artikel"]["tanggalBuat_posting"]; ?></p>
        <h4>Penulis</h4>
        <p><?php echo $data["user"]["nama"]; ?>
            / <?php echo $data["user"]["username"]; ?></p>

        <div class="border-bottom border-primary border-2 mb-1"></div>
        <?php echo $data["artikel"]["isi_posting"]; ?>


    </div>
</div>