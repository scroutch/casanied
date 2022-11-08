<?php
include('../pages/bdd.php'); //(chemin à adapter)
// var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Dashboard Template</title>
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
</head>

<body class="sidebar-dark">
	<div class="main-wrapper">

		<!-- left navbar -->
		<nav class="sidebar">
			<div class="sidebar-header">
				<a href="#" class="sidebar-brand">
					Noble<span>UI</span>
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
						<a href="admin.php?page=2" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Catégories</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin.php?page=3" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Sous catégories</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin.php?page=4" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Produits</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin.php?page=5" class="nav-link">
							<i class="link-icon" data-feather="box"></i>
							<span class="link-title">Users</span>
						</a>
					</li>
					<!-- <li class="nav-item nav-category">web apps</li>
					<li class="nav-item">
						<a href="admin.php?page=2" class="nav-link">
							<i class="link-icon" data-feather="message-square"></i>
							<span class="link-title">Test</span>
						</a>
					</li> -->
					<!--<li class="nav-item">
						<a href="admin.php?page=2" class="nav-link">
							<i class="link-icon" data-feather="message-square"></i>
							<span class="link-title">Read</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="admin.php?page=2" class="nav-link">
							<i class="link-icon" data-feather="message-square"></i>
							<span class="link-title">Compose</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="pages/apps/chat.html" class="nav-link">
							<i class="link-icon" data-feather="message-square"></i>
							<span class="link-title">Chat</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">
							<i class="link-icon" data-feather="calendar"></i>
							<span class="link-title">Calendar</span>
						</a>
					</li> -->
					<!-- <li class="nav-item nav-category">Components</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
							<i class="link-icon" data-feather="feather"></i>
							<span class="link-title">UI Kit</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="uiComponents">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Alerts</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Badges</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Breadcrumbs</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
							<i class="link-icon" data-feather="anchor"></i>
							<span class="link-title">Advanced UI</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="advancedUI">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Cropper</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Owl carousel</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Sweet Alert</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
							<i class="link-icon" data-feather="inbox"></i>
							<span class="link-title">Forms</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="forms">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Basic Elements</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Advanced Elements</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Editors</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
							<i class="link-icon" data-feather="pie-chart"></i>
							<span class="link-title">Charts</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="charts">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Apex</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">ChartJs</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Flot</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
							<i class="link-icon" data-feather="layout"></i>
							<span class="link-title">Table</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="tables">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Basic Tables</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Data Table</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
							<i class="link-icon" data-feather="smile"></i>
							<span class="link-title">Icons</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="icons">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Feather Icons</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Flag Icons</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Mdi Icons</a>
								</li> -->
					<!-- </ul>
			</div>
			</li> -->
					<!-- <li class="nav-item nav-category">Pages</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
							<i class="link-icon" data-feather="book"></i>
							<span class="link-title"></span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="general-pages">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">Blank page</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Faq</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">Invoice</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
							<i class="link-icon" data-feather="cloud-off"></i>
							<span class="link-title">Error</span>
							<i class="link-arrow" data-feather="chevron-down"></i>
						</a>
						<div class="collapse" id="errorPages">
							<ul class="nav sub-menu">
								<li class="nav-item">
									<a href="" class="nav-link">404</a>
								</li>
								<li class="nav-item">
									<a href="" class="nav-link">500</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div> -->
		</nav>
		<!-- fin left navbar -->

		<!-- settings sidebar -->
		<nav class="settings-sidebar">
			<div class="sidebar-body">
				<a href="#" class="settings-sidebar-toggler">
					<i data-feather="settings"></i>
				</a>
				<h6 class="text-muted">Sidebar:</h6>
				<div class="form-group border-bottom">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
							Light
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
							Dark
						</label>
					</div>
				</div>
				<div class="theme-wrapper">
					<h6 class="text-muted mb-2">Light Theme:</h6>
					<a class="theme-item active" href="demo_1/dashboard-one.html">
						<img src="assets/images/screenshots/light.jpg" alt="light theme">
					</a>
					<h6 class="text-muted mb-2">Dark Theme:</h6>
					<a class="theme-item" href="demo_2/dashboard-one.html">
						<img src="assets/images/screenshots/dark.jpg" alt="light theme">
					</a>
				</div>
			</div>
		</nav>
		<!-- fin settings sidebar -->

		<div class="page-wrapper">

			<!-- top navbar -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<ul class="navbar-nav">
						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="user-plus"></i>
										</div>
										<div class="content">
											<p>New customer registered</p>
											<p class="sub-text text-muted">2 sec ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="gift"></i>
										</div>
										<div class="content">
											<p>New Order Recieved</p>
											<p class="sub-text text-muted">30 min ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="alert-circle"></i>
										</div>
										<div class="content">
											<p>Server Limit Reached!</p>
											<p class="sub-text text-muted">1 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="layers"></i>
										</div>
										<div class="content">
											<p>Apps are ready for update</p>
											<p class="sub-text text-muted">5 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="download"></i>
										</div>
										<div class="content">
											<p>Download completed</p>
											<p class="sub-text text-muted">6 hrs ago</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="userr">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="index.php" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
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
						include('pages/user.php');
					}
				} else {
					$_SESSION['message'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Vous n\'avez pas les droits pour accéder à cette zone</div>';
					// redirection vers le site (chemin à adapter)
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
</body>

</html>