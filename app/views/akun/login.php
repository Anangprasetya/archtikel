<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<style>
		html, body {
			height: 100%;
		}

		.form-signin {
			max-width: 330px;
			padding: 15px;
			padding-top: 100px;
		}

		.form-signin .form-floating:focus-within {
			z-index: 2;
		}

		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.btn-primary{
			border: 0px;
			color: black;
			background-color: rgb(253,193,48);
		}
		button{
			height: 50px;
			border-radius: 10px;
			font-size: 24px;
		}
		button:hover{
			opacity: 0.8;
		}
	</style>
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
			<button class="w-100  btn-lg btn-primary" type="submit">Sign in</button>
		</form>
	</main>
</body>