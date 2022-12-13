<head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<link rel="stylesheet" href="<?php echo BASEURL . '/archtikelCSS/style.css' ?>">
</head>

<body class="text-center">
	<main class="form-signin w-100 m-auto">
		<?php Message::getMessage(); ?>
		<form action="<?= BASEURL . 'account/proses_register' ?>" method="POST"> 
			<!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
			<h1 class="h3 mb-3 fw-normal">Sign In</h1>

			<div class="form-floating">
				<input type="text" class="form-control" name="nama" placeholder="nama" required>
				<label for="floatingInput">Nama</label>
			</div><br>
			<div class="form-floating">
				<input type="text" class="form-control" name="username" placeholder="username" required>
				<label for="floatingInput">Username</label>
			</div><br>
			<div class="form-floating">
				<input type="email" class="form-control" name="email" placeholder="email" required>
				<label for="floatingInput">Email</label>
			</div><br>

			<div class="form-floating">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
				<label for="floatingPassword">Password</label>
			</div><br>
			<!-- <div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="i-agree"> I agree with terms and condition
				</label>
			</div> -->
			<button class="btn w-100 btn-primary" type="submit">Registrasi</button>
		</form>
	</main>
</body>



