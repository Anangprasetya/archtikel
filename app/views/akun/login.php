<h2>LOGIN</h2>
<?php Message::getMessage(); ?>
<form action="<?= BASEURL . 'account/proses_login' ?>" method="POST">

	<label for="">Username</label>
	<input type="text" name="username" placeholder="Masukkan username" required> <br>

	<label for="">Password</label>
	<input type="password" name="password" placeholder="Masukkan password" required> <br>

	<button type="submit">Login</button>
</form>