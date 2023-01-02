<?php
include('../models/bdd.php');

// session_unset();
// var_dump($_SESSION);
?>
<div class="row">
	<?php
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
	?>
</div>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connexion</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<style>
		body {
			background-color: #0c1427;
			padding-top: 10%;
		}

		form {
			background-color: #fff;
			padding: 15px;
			border-radius: 5px
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<?php
			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			}
			?>
		</div>
		<div class="row">
			<div class="col-6 mx-auto mt-5">
				<form method="POST" action="traitement.php">
					<h1 class="text-center mb-5">Accès panel admin</h1>
					<div class="mb-3 row">
						<label for="email" class="col-2 col-form-label">Email</label>
						<div class="col-10">
							<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="password" class="col-2 col-form-label">Password</label>
						<div class="col-10">
							<input type="password" class="form-control" id="password" name="password">
						</div>
					</div>
					<div class="mt-5 row">
						<div class="col-12 text-center">
							<input type="submit" class="btn btn-primary" value="Connexion">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
	</script>
</body>

</html>