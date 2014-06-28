<?php require_once app_path() . '/views/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>MLM</title>
	<?= HTML::style('/assets/bootstrap-3.1.1-dist/css/bootstrap.min.css') ?>
	<?= HTML::style('/assets/css/style.css') ?>
	
	<!-- Placed temporarily -->
	<?= get_jquery(); ?>
</head>
<body>
<div class="container">

<header>
	<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<a class="navbar-brand" href="#">MLM</a>
	</div>
	<a class="btn btn-sm btn-primary navbar-btn" data-toggle="modal" data-target="#register_modal">Register</a>
	</nav>

	 
</header>