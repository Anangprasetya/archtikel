<div class="container-md">
	<div class="row mb-3 justify-content-center">
		<div class="col-md-6">
			<h2 class="text-center">LOGIN</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<?php Message::getTemplateMessage(); ?>
			<form action="<?= BASEURL . 'account/proses_login' ?>" method="POST">
				<div class="mb-3">
					<label for="username" class="form-label">Username</label>
					<input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</div>
</div>