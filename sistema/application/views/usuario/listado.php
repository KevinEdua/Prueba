<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio.</title>

	<?php $this->load->view('incluir/tema.php'); ?>
</head>

<body>
	<div id="container" class="effect mainnav-lg">
		
		<!-- BARRA INFO -->
		<?php $this->load->view('incluir/barra_info');?>

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<div id="content-container">
				
				<!--Page Title-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<div id="page-title">
					<h1 class="page-header text-overflow">Usuarios</h1>
				</div>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End page title-->


				<!--Breadcrumb-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<ol class="breadcrumb">
					<li><a href="<?=base_url()?>catalogos">Catalogos</a></li>
					<li class="active">Usuarios</li>
				</ol>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End breadcrumb-->


		

				<!--CONTENIDO DE LA PAGINA-->
				<div id="page-content">
				
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Listado de Usuario</h3>
						</div>
					
						<div class="barraCRUD table-toolbar-left">
							<button data-target="#modal-nuevo" data-toggle="modal" class="btn btn-primary btn-labeled fa fa-plus">Nuevo</button>
							<button data-target="#modal-editar" data-toggle="modal" class="btn btn-warning btn-labeled fa fa-pencil">Editar</button>
							<button data-target="#modal-eliminar" data-toggle="modal" class="btn btn-danger btn-labeled fa fa-trash">Eliminar</button>
							<button id="demo-bootbox-bounce" class="btn btn-warning">Bounce</button>
						</div>
					
						<div class="panel-body">
							<table class="tablaCRUD table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Correo</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($usuarios as $clave => $usuario): ?>
									<tr>
										<td><?=$usuario->usu_nombre?></td>
										<td><?=$usuario->usu_correo?></td>
										<td>
										<?php if($usuario->usu_activo == 1):?>
											<div class="label label-table label-success">Activo</div>
										<?php else: ?>
											<div class="label label-table label-danger">Inactivo</div>
										<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!--MODAL NUEVO USUARIO-->
				<div class="modal fade" id="modal-nuevo" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
								<button data-dismiss="modal" class="close" type="button">
								<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">REGISTRO DE UN NUEVO USUARIO</h4>
							</div>

							<form class="form-horizontal" action="<?=base_url()?>catalogos/usuarios" method="post">
								<div class="modal-body">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Nombre</label>
											<div class="col-sm-6">
												<input type="text" name="nombre" placeholder="Alias" class="form-control input-sm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Tipo</label>
											<div class="col-sm-6">
												<select name="tipo" class="form-control input-sm" required>
													<option></option>
													<?php foreach($tipos as $key => $tipo): ?>
														<option value="<?=$tipo->tip_usu_id?>"><?=$tipo->tip_usu_nombre?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Correo Electronico</label>
											<div class="col-sm-6">
												<input type="email" name="correo" placeholder="nombre@correo.com" class="form-control input-sm">
												<small class="help-block">Se usara para iniciar sesion.</small>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label " >Contraseña</label>
											<div class="col-sm-6">
												<input type="password" name="contrasena" class="form-control input-sm">
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
									<input type="submit" value="Guardar" class="btn btn-primary"/>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!--MODAL EDITAR USUARIO-->
				<div class="modal fade" id="modal-editar" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
								<button data-dismiss="modal" class="close" type="button">
								<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">EDITAR LA INFORMACIÓN DE UN USUARIO</h4>
							</div>


							<div class="modal-body">
								<form class="form-horizontal">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Nombre</label>
											<div class="col-sm-6">
												<input type="text" placeholder="Alias" class="form-control input-sm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Correo Electronico</label>
											<div class="col-sm-6">
												<input type="email" placeholder="nombre@correo.com" class="form-control input-sm">
												<small class="help-block">Se usara para iniciar sesion.</small>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label " >Contraseña</label>
											<div class="col-sm-6">
												<input type="password" class="form-control input-sm">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label" >Tipo</label>
											<div class="col-sm-6">
												<select class="form-control input-sm"></select>
											</div>
										</div>								
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Fotografia</label>
											<div class="col-sm-6">
												<input type="file" class="form-control input-sm">
											</div>
										</div>
									</div>
								</form>
							</div>
							
							<div class="modal-footer">
								<button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
								<button class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--END CONTENT CONTAINER-->
			
			<!-- BARRA DE NAVEGACION -->
			<?php $data['menu'] = 'catalogos'; $this->load->view('incluir/navegacion',$data);?>
		</div>

		

        <!-- FOOTER -->
        <?php $this->load->view('incluir/pie_pagina');?>
       
        <!-- SCROLL TOP BUTTON -->       
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
	</div>
	
</body>
</html>
