<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<link rel="stylesheet" href=".\style.css">
</head>

<body class="text-center">
	<main class="form-signin w-100 m-auto">
		<?php Message::getMessage(); ?>
		<form action="<?= BASEURL . 'account/proses_login' ?>" method="POST"> 
			<!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

			<div class="form-floating">
				<input type="text" class="form-control" name="username" placeholder="username" required>
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
				<label for="floatingPassword">Password</label>
			</div>

			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn w-100 btn-primary" type="submit">Sign in</button>
		</form>
	</main>
</body>