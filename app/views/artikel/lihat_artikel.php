<h4>Judul : </h4>
<h1><?php echo $data["artikel"]["judul_posting"]; ?></h1>
<h4>Sejak : </h4>
<p><?php echo $data["artikel"]["tanggalBuat_posting"]; ?></p>
<h4>Penulis</h4>
<p><?php echo $data["user"]["nama"]; ?>
    / <?php echo $data["user"]["username"]; ?></p>

<hr>
<?php echo $data["artikel"]["isi_posting"]; ?>