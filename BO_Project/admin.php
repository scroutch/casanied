<?php
include('./pages/bdd.php'); //(chemin à adapter)
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panel admin</title>
	<link rel="stylesheet" href="../assets/fontawesome-free-6.2.0/css/all.css">
	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="assets/images/favicon.png" />
	<!-- style perso -->
	<link rel="stylesheet" href="assets/css/backoffice.css">
</head>

<body class="sidebar-dark">
	<div class="main-wrapper">

		<!-- left navbar -->
		<nav class="sidebar">
			<div class="sidebar-header">
				<a href="admin.php" class="sidebar-brand">
					<span>Casanied</span>
				</a>
				<div class="sidebar-toggler not-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="sidebar-body">
				<ul class="nav">
					<li class="nav-item nav-category">Général</li>
					<li class="nav-item">
						<a href="admin.php?page=4" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Produits</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin.php?page=5" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Collaborateurs</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- fin left navbar -->
		<div class="page-wrapper">

			<!-- top navbar -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<p class="email text-muted"><?php echo $_SESSION['username'] ?></p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-danger" href="pages/logout.php">
								Se déconnecter
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- fin top navbar -->

			<!--------------------------------------------------------------------------------------------------->
			<!--                                      page content                                             -->
			<div class="page-content">
				<?php
				if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'ADMIN') {
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					} else {
						$page = 1;
					}

					if ($page == 1) {
						include('pages/accueil.php');
					} elseif ($page == 2) {
						include('pages/categorie.php');
					} elseif ($page == 3) {
						include('pages/sousCat.php');
					} elseif ($page == 4) {
						include('pages/produits.php');
					} elseif ($page == 5) {
						include('pages/collab.php');
					} elseif ($page == 6) {
						include('pages/addCollab.php');
					} elseif ($page == 7) {
						include('pages/confirmDelete.php');
					} elseif ($page == 8) {
						include('pages/addProduct.php');
					} elseif ($page == 9) {
						include('pages/target_product.php');
					}
				} else {
					$_SESSION['message'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Vous n\'avez pas les droits pour accéder à cette zone</div>';
					// redirection vers le site (chemin à adapter)
					header('Location: ../index.php?page=1');
				}


				?>
			</div>
			<!--                                    fin page content                                           -->
			<!--------------------------------------------------------------------------------------------------->

			<!-- footer -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- fin footer -->

		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="assets/vendors/chartjs/Chart.min.js"></script>
	<script src="assets/vendors/jquery.flot/jquery.flot.js"></script>
	<script src="assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
	<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<script src="assets/js/dashboard.js"></script>
	<script src="assets/js/datepicker.js"></script>
	<!-- end custom js for this page -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>