<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
	<meta charset="utf8" />
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
	<?php
		if (isset($this->js)){
			foreach ($this->js as $js){
				echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
			}
		}
	?>
</head>
<body>

<?php Session::init(); ?>
	
<div id="header">
	
	<p style="font-size:26px;">SiteName</p>
	<?php if (Session::get('loggedIn') == false):?>
		<a href="<?php echo URL; ?>index">Index</a>
		<a href="<?php echo URL; ?>anuncio">Anúncios</a>
		
		<a href="<?php echo URL; ?>help">Help</a>
		<a href="<?php echo URL; ?>user/add">Anunciar</a>

	<?php endif; ?>	

	<?php if (Session::get('loggedIn') == true):?>
		
		<!--MENU ACOMPANHANTE -->
		<?php if (Session::get('role') == 'default'):?>
			<a href="<?php echo URL; ?>dashboard">Dashboard</a>
			<a href="<?php echo URL; ?>dashboard/anuncios">Anúncios</a>
			<a href="<?php echo URL; ?>dashboard/planos">Planos</a>
			<a href="<?php echo URL; ?>dashboard/conta">Conta</a>
		<?php endif; ?>
		
		<!--MENU ADMIN -->
		<?php if (Session::get('role') == 'admin'):?>
			<a href="<?php echo URL; ?>anuncio">Anúncios</a>
			<a href="<?php echo URL; ?>plano">Planos</a>
			<a href="<?php echo URL; ?>configuracao">Configuração</a>
		<?php endif; ?>
		
		<!--MENU PROPIETÁRIO -->
		<?php if (Session::get('role') == 'owner'):?>
			<a href="<?php echo URL; ?>user">Users</a>
			<a href="<?php echo URL; ?>graficos">Graficos</a>
			<a href="<?php echo URL; ?>administracao">Administração</a>
		
		<?php endif; ?>
		
		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	
	<?php else: ?>
		<a href="<?php echo URL; ?>login">Login</a>
	<?php endif; ?>
</div>
	
<div id="content">
	
	