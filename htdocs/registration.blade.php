<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign in</title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- our css -->
	<link href="style.css" rel="stylesheet">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- site icon -->
	<link rel="shortcut icon" href="white_logo_mini.svg" type="image">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" aria-label="Eighth navbar example">
	<div class="container">
		<!-- button -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- logo -->
		<a class="navbar-brand" href="index"><img src="black_logo.svg" alt="" height="30"></a>

		<!-- bag icon -->
		<div class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bag"></i></a>
			<ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdown04">
				<li><a class="dropdown-item" href="bag"><i class="bi bi-bag"></i> Bag(0)</a></li>
				<li><a class="dropdown-item" href="orders"><i class="bi bi-box-seam"></i> Orders</a></li>
				<li><a class="dropdown-item" href="saved"><i class="bi bi-bookmark"></i> Saved items</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="sign_in"><i class="bi bi-person-circle"></i> Account</a></li>
			</ul>
		</div>
		<!-- navbar items -->
		<div class="collapse navbar-collapse" id="navbarsExample07">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="store">Store</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="support">Support</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contacts">Contacts</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- header -->
<div class="container mt">
	<h1>Sign in</h1>
	<hr class="devider">
</div>
<!-- main part -->
<section class="text-center">
	<div class="container bg-white text-dark">
		<div class="py-5 px-md-5">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8">

					<form action="check.php" method="post">
						<!-- Email input -->

						<div class="form-outline mb-5">
							<input type="email" id="form3Example3" class="form-control" name="login" />
							<label class="form-label" for="form3Example3">Email address</label>
						</div>

						<!-- Password input -->
						<div class="form-outline mb-5">
							<input type="password" id="form3Example4" class="form-control" name="pass" />
							<label class="form-label" for="form3Example4">Password</label>
						</div>

						<div class="form-outline mb-5">
							<input type="login" id="form3Example4" class="form-control" name="name" />
							<label class="form-label" for="form3Example4">Login</label>
						</div>
						<!-- Don't have account? -->
						<p><a href="sign_in.blade.php">Log in here</a></p>
						<!-- Submit button -->
						<button type="submit" class="btn btn-primary btn-block btn-lg mb-4">
							Register
						</button>

						</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- footer -->
<div class="container">
	<footer class="py-3 my-4">
		<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			<li class="nav-item"><a href="index" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="support" class="nav-link">Support</a></li>
			<li class="nav-item"><a href="contacts" class="nav-link">Contacts</a></li>
			<li class="nav-item"><a href="about" class="nav-link">About</a></li>
		</ul>
		<p class="text-center text-muted">© 2021 Comb Island, Inc</p>
	</footer>
</div>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
