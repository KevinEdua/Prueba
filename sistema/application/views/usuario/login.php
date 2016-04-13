<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion.</title>
	<?php $this->load->view('incluir/tema.php'); ?>
	
</head>

<body>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay" class="bg-img img-balloon"></div>
		
		
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline" href="index.html">
					<!-- <img alt="Nifty Admin" src="img/logo.png" class="brand-icon"> -->
					<span class="brand-title">InStock<span class="text-thin">Administracion</span></span>
				</a>
			</div>
		</div>
		
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<p class="pad-btm">Inicia sesion con tu cuenta</p>
					<form action="<?=base_url()?>login" method="post">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" name="correo" class="form-control" placeholder="Correo Electronico">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Iniciar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="pages-password-reminder.html" class="btn-link mar-rgt">Olvidaste tu contraseña ?</a>
			</div>
		</div>
		<!--===================================================-->
	</div>
</body>
</html>
