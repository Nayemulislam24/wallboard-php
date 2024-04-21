<?php
include('./libs/db.php');

## check logged in and redirect back
if (empty($_SESSION['id']) && empty($_SESSION['full_name'])) {
	header('Location: login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>

	<!--plugins-->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>

	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet"/>
	<script src="assets/js/pace.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">

	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/header-colors.css"/>

	<!--uppy plugin for resumable file upload-->
	<link href="https://releases.transloadit.com/uppy/v3.5.0/uppy.min.css" rel="stylesheet">

	<title>Dashboard</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<?php include('./layouts/sidebar.php'); ?>
		<!--end sidebar wrapper -->

		<!--start header -->
		<?php include('./layouts/navbar.php'); ?>
		<!--end header -->

		<!--start page wrapper -->
		<div class="page-wrapper">
    		<div class="page-content">
				<?php include ('layouts/control.php'); ?>
			</div>
		</div>
		<!--end page wrapper -->

		<!-- start footer -->
		<?php include('./layouts/footer.php'); ?>
		<!-- end footer -->
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets/js/index.js"></script>

	<!--uppy plugin for resumable file upload-->
	<script src="https://releases.transloadit.com/uppy/v3.5.0/uppy.min.js"></script>

	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>
</html>