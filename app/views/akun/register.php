
<div class="container-md">
	<div class="row mb-3 justify-content-center">
		<div class="col-md-6">
			<h2 class="text-center">REGISTER</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<?php Message::getTemplateMessage(); ?>
			<form action="<?= BASEURL . 'account/proses_register' ?>" method="POST">
				<div class="mb-2">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" name="nama" class="form-control" id="nama">
				</div>
				<div class="mb-2">
					<label for="username" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
				</div>
				<div class="mb-2">
					<label for="email" class="form-label">Email</label>
					<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
				</div>
				<div class="mb-2">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
