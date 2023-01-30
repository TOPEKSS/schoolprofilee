<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Forgot Password Page &mdash; Bootstrap 4 Login Page Snippet</title>
    <link href="../assets/img/logo.png" rel="icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="../assets/img/logo.png" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Forgot Password? 🔒</h4>
							<h6 class="text">Enter your email and we'll send you instructions to reset your password</h6>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="email" class="form-label">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required placeholder="Enter your email"
                    autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
									<div class="form-text text-muted form-label">
										By clicking "Reset Password" we will send a password reset link
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
								<br>
								<div class="text-center">
								<a href="../forms/login.php" class="d-flex align-items-center justify-content-center">
								<span><svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="chevron left" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-chevron-left mx-auto b-icon bi" data-v-41be6633=""><g data-v-41be6633=""><path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path></g></svg></span>
								Back to login
								</a>
							</div>
							</form>
						</div>
					</div>
					<div class="footer">
					&copy; Copyright <strong>Coding Skensa</strong>. All Rights Reserved 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="../assetsjs/my-login.js"></script>
</body>
</html>