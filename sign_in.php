
<!doctype html>
<html lang="en">
  <head>
  	<title>sign_in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/connecter/style.css">

	</head>
	<body>
	<style>
		.valid
		{
			visibility: hidden;
		}
		.invalid
		{
			visibility: visible;
			color: red;
		}
	</style>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Authentification</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(image_site/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Connecter</h3>
			      		</div>
			      	</div>
					<form class="signin-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="text" class="form-control" placeholder="Email" name="email" id="email">
							<div class="valid" id="email-msg"></div>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" >
					  <div class="valid" id="pass-msg"></div>
		            </div>
		            <div class="form-group">
		            	<button type="button" id="btn_signin" class="form-control btn btn-primary rounded submit px-3">Se connecter</button>
		            </div>
					<div class="alert alert-danger" id="alert_error" role="alert">
						Email ou mot de passe incorrect !!
					</div>
					<div class="alert alert-success" id="alert_succes" role="alert">
						veuillez patientez....
					</div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Vous n'avez pas encore de compte ? <a href="sign_up.php">S'inscrire</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/connect_js/authentification.js"></script>

	</body>
</html>