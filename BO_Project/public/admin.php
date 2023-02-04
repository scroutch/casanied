<?php
include('../models/bdd.php'); //(chemin à adapter)
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panel admin</title>
	<link rel="stylesheet" href="../../public/assets/fontawesome-free-6.2.0/css/all.css">
	<!-- core:css -->
	<link rel="stylesheet" href="../public/assets/vendors/core/core.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="../public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../public/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../public/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="../public/assets/css/style.css">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="../public/assets/images/favicon.png" />
	<!-- style perso -->
	<link rel="stylesheet" href="../public/assets/css/backoffice.css">
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
			<!--------------------------------------------------------------------------------------------------->
			<!--                                      page content                                             -->
			<div class="page-content">
				<?php
				if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					} else {
						$page = 1;
					}
					if ($page == 1) {
						include('../views/accueil.php');
					} elseif ($page == 2) {
						include('../views/categorie.php');
					} elseif ($page == 3) {
						include('../views/sousCat.php');
					} elseif ($page == 4) {
						include('../views/produits.php');
					} elseif ($page == 5) {
						include('../views/collab.php');
					} elseif ($page == 6) {
						include('../views/addCollab.php');
					} elseif ($page == 7) {
						include('../views/confirmDelete.php');
					} elseif ($page == 8) {
						include('../views/addProduct.php');
					} elseif ($page == 9) {
						include('../controlers/target_product.php');
					} elseif ($page == 10) {
						include('../views/updatePicture.php');
					} elseif ($page == 11) {
						include('../views/target_picture.php');
					}
				} else {
					$_SESSION['message'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Vous n\'avez pas les droits pour accéder à cette zone</div>';
					// redirection vers le site (chemin à adapter)
					header('Location: ../../public/index.php?page=1');
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
	<script src="../public/assets/vendors/core/core.js"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="../public/assets/vendors/chartjs/Chart.min.js"></script>
	<script src="../public/assets/vendors/jquery.flot/jquery.flot.js"></script>
	<script src="../public/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
	<script src="../public/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="../public/assets/vendors/apexcharts/apexcharts.min.js"></script>
	<script src="../public/assets/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="../public/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../public/assets/js/template.js"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<script src="../public/assets/js/dashboard.js"></script>
	<script src="../public/assets/js/datepicker.js"></script>
	<!-- end custom js for this page -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>

</html>