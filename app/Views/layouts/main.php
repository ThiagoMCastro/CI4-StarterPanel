<!DOCTYPE html>
<html lang="pt-BR" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Painel Mixforce</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('')?>assets/img/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('')?>assets/img/favicon.ico">
	<link rel="manifest" href="<?= base_url('')?>assets/img/favicons/manifest.json">
	<meta name="msapplication-TileImage" content="<?= base_url('')?>assets/img/favicons/mstile-150x150.png">
	<meta name="theme-color" content="#ffffff">
	<script src="<?= base_url('')?>vendors/simplebar/simplebar.min.js"></script>
	<script src="<?= base_url('')?>assets/js/config.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<link href="<?= base_url('')?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('')?>assets/icons/line.css">
	<link href="<?= base_url('')?>assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
	<link href="<?= base_url('')?>assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
	<link href="<?= base_url('')?>assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
	<link href="<?= base_url('')?>assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
	<script>
		var linkRTL = document.getElementById('style-rtl');
		var userLinkRTL = document.getElementById('user-style-rtl');
		linkRTL.setAttribute('disabled', true);
		userLinkRTL.setAttribute('disabled', true);
	</script>
</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">
		<?= $this->include('layouts/sidebar'); ?>
		<?= $this->include('layouts/header'); ?>
		<div class="content">
			<?= $this->renderSection('content'); ?>
			<?= $this->include('layouts/footer'); ?>
		</div>
	</main>
	<?= $this->renderSection('javascript'); ?>
	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->
	<script src="<?= base_url('')?>vendors/popper/popper.min.js"></script>
	<script src="<?= base_url('')?>vendors/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url('')?>vendors/anchorjs/anchor.min.js"></script>
	<script src="<?= base_url('')?>vendors/is/is.min.js"></script>
	<script src="<?= base_url('')?>vendors/fontawesome/all.min.js"></script>
	<script src="<?= base_url('')?>vendors/lodash/lodash.min.js"></script>
	<script src="<?= base_url('')?>vendors/list.js/list.min.js"></script>
	<script src="<?= base_url('')?>vendors/feather-icons/feather.min.js"></script>
	<script src="<?= base_url('')?>vendors/dayjs/dayjs.min.js"></script>
	<script src="<?= base_url('')?>assets/js/phoenix.js"></script>
</body>

</html>