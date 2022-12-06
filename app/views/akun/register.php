<h2>REGISTRASI</h2>
<?php Message::getMessage(); ?>
<form action="<?= BASEURL . 'account/proses_register' ?>" method="POST">
	<label for="">Nama</label>
	<input type="text" name="nama" placeholder="Masukkan nama" required> <br>

	<label for="">Username</label>
	<input type="text" name="username" placeholder="Masukkan username" required> <br>

	<label for="">Email</label>
	<input type="email" name="email" placeholder="Masukkan email" required> <br>

	<label for="">Password</label>
	<input type="password" name="password" placeholder="Masukkan password" required> <br>

	<button type="submit">Registrasi</button>
</form>