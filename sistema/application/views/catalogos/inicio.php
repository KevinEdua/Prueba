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
				<div id="page-title">
					<h1 class="page-header text-overflow">Catalogos</h1>
				</div>

				<!--Breadcrumb-->
				<ol class="breadcrumb">
					<li class="active">Catalogos</li>
				</ol>


		

				<!--CONTENIDO DE LA PAGINA-->
				<div id="page-content">

				<div class="col-sm-12">
						<div class="panel">
							<div class="panel-body">

								<div class="col-sm-1 text-center">
									<a href="<?=base_url()?>catalogos/usuarios" class="btn btn-default btn-hover-warning">
										<p style="font-size:20pt;" class="fa fa-group"></p>
										<p>Usuarios</p>
									</a>
								</div>

								<div class="col-sm-1 text-center">
									<a href="<?=base_url()?>catalogos/usuarios/tipos" class="btn btn-default btn-hover-warning">
										<p style="font-size:20pt;" class="fa fa-asterisk"></p>
										<p>Tipo Usuario</p>
									</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>


			</div>
			
			<!-- NAVEGACION -->
			<?php $data['menu'] = 'catalogos'; $this->load->view('incluir/navegacion',$data);?>

		</div>

		

        <!-- FOOTER -->
        <?php $this->load->view('incluir/pie_pagina');?>
       
        <!-- SCROLL TOP BUTTON -->       
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
	</div>
	
</body>
</html>
