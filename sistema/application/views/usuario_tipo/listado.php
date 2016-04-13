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
					<h1 class="page-header text-overflow">Tipos</h1>
				</div>


				<!--Breadcrumb-->
				<ol class="breadcrumb">
					<li><a href="<?=base_url()?>catalogos">Catalogos</a></li>
					<li><a href="<?=base_url()?>catalogos/usuarios">Usuarios</a></li>
					<li class="active">Tipos</li>
				</ol>


				

				<!--CONTENIDO DE LA PAGINA-->
				<div id="page-content">
                    
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Listado de Tipos</h3>
						</div>
					
						<div class="barraCRUD table-toolbar-left">
							<button data-target="#modal-nuevo" data-toggle="modal" class="btn btn-primary btn-labeled fa fa-plus">Nuevo</button>
							<button onclick="modal();" class="btn btn-warning btn-labeled fa fa-pencil">Editar</button>
							<button  class="btn btn-danger btn-labeled fa fa-trash">Eliminar</button>
						</div>
					
						<div class="panel-body">
							<table id="tblDatos" class="tablaCRUD table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Estado</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($tipos as $key => $tipo): ?>
									<tr id="<?=$tipo->tip_usu_id?>">
                                        <td><?=$tipo->tip_usu_nombre?></td>
										<td>
										<?php if($tipo->tip_usu_activo == 1):?>
											<span class="label label-table label-success">Activo</span>
										<?php else: ?>
											<span class="label label-table label-danger">Inactivo</span>
										<?php endif; ?>
										</td>
                                        <td>
                                            <button onclick="eliminar(<?=$tipo->tip_usu_id?>);" title="Eliminar" class="demo-delete-row btn btn-danger btn-xs btn-icon fa fa-times"></button>
                                            <button onclick="modal(<?=$tipo->tip_usu_id?>);" tittle="Editar" class="demo-delete-row btn btn-warning btn-xs btn-icon fa fa-pencil"></button>
                                        </td>
									</tr>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<!--MODAL NUEVO TIPO-->
				<div class="modal fade" id="modal-nuevo" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
								<button data-dismiss="modal" class="close" type="button">
								<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">REGISTRO DE UN NUEVO TIPO</h4>
							</div>

							<!--<form class="form-horizontal" action="<?=base_url()?>catalogos/usuarios/tipos" method="post">-->
                            <form id="nuevo_tipo" class="form-horizontal" onsubmit="return false;">
								<div class="modal-body">
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label" for="demo-is-inputsmall">Nombre</label>
											<div class="col-sm-6">
												<input type="text" id="nombre" name="nombre" class="form-control input-sm">
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                    <button type="submit" onclick="nuevo();"  class="btn btn-primary">Guardar</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!--MODAL EDITAR TIPO-->
				<div class="modal fade" id="modal-editar" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content ">

							<div class="modal-header">
								<button data-dismiss="modal" class="close" type="button">
								<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">EDITAR LA INFORMACIÓN DE UN TIPO</h4>
							</div>
                            
							<div class="modal-body">
								<form id="editar_tipo" class="form-horizontal" onsubmit="return false;" method="post">
									<div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">ID</label>
                                            <div class="col-sm-6">
                                            <input type="text" id="eid" class="form-control input-sm" disabled/>
                                            </div>
                                        </div>
										<div class="form-group">
											<label class="col-sm-3 control-label" >Nombre</label>
											<div class="col-sm-6">
												<input type="text" id="enombre" name="enombre" class="form-control input-sm" required/>
											</div>
										</div>
                                    
										<div class="form-group">
											<label class="col-sm-3 control-label">Estado</label>
											<div class="col-sm-6">
												<div class="radio">
													<label id="lactivo" class="form-radio form-normal">
                                                    <input id="eactivo"  type="radio" value="1"  name="eactivo"> Activo</label>
												</div>
												<div class="radio">
													<label id="linactivo" class="form-radio form-normal">
                                                    <input id="linactivo" type="radio" value="0" name="eactivo"> Inactivo</label>
												</div>
											</div>
										</div>
									</div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                                        <button type="submit" onclick="editar();"  class="btn btn-warning">Actualizar</button>
                                    </div>
                                </form>
                            </div>
					   </div>
				    </div>
			     </div>
                <!--END CONTENT CONTAINER-->
		</div>
            
		
            <!-- BARRA DE NAVEGACION -->
            <?php $data['menu'] = 'catalogos'; $this->load->view('incluir/navegacion',$data);?>               
	   </div>
      
        <!-- FOOTER -->
        <?php $this->load->view('incluir/pie_pagina');?>
</body>
<script type="text/javascript">
    
    $(window).on('load', function() {
        var t = $('.tablaCRUD').DataTable({
            "responsive": true,
            "columns": [
            null,
            null,
            { "width": "40px" }
            ],
            "language": {
                "info": "Mostrando _PAGE_ de _PAGES_ pagina(s)",
                "paginate": {
                  "previous": '<i class="fa fa-angle-left"></i>',
                  "next": '<i class="fa fa-angle-right"></i>'
                }
            },
            "dom": '<"newtoolbar">frtip'
        });	
        $('.barraCRUD').appendTo($("div.newtoolbar"));

        $('.tablaCRUD').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                t.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
    });
    
    var url = "<?=base_url()?>";
    var faIcon = {
		valid: 'fa fa-check-circle fa-lg text-success',
		invalid: 'fa fa-times-circle fa-lg',
		validating: 'fa fa-refresh'
	}
    

    
    /*  --------------------------------  VALIDAR FORMULARIOS  --------------------------------  */
    $('#nuevo_tipo').bootstrapValidator({
		message: 'This value is not valid',
		feedbackIcons: faIcon,
		fields: {
		nombre: {
			message: 'The username is not valid',
			validators: {
				notEmpty: {
					message: 'El nombre es requerido.'
				},regexp: {
					regexp: /^[A-Z\s]+$/i,
					message: 'El nombre sólo puede contener caracteres alfabéticos y espacios'
				}
			}
		}
		}
	}).on('success.field.bv', function(e, data) {
		var $parent = data.element.parents('.form-group');
		$parent.removeClass('has-success');
	}); 
    
    $('#editar_tipo').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: faIcon,
        fields: {
        enombre: {
            message: 'The username is not valid',
            validators: {
                notEmpty: {
                    message: 'El nombre es requerido.'
                },regexp: {
                    regexp: /^[A-Z\s]+$/i,
                    message: 'El nombre sólo puede contener caracteres alfabéticos y espacios'
                }
            }
        }
        }
    }).on('success.field.bv', function(e, data) {
        var $parent = data.element.parents('.form-group');
        $parent.removeClass('has-success');
    });
    
    
    /* --------------------------------    FUNCTIONES AJAX     -------------------------------- */
    
    function nuevo(){
        var nombre = document.getElementById('nombre');
        $.ajax( {
            type: 'post',
            url: url + 'catalogos/usuarios/tipos/nuevo',
            data: { nombre: nombre.value  },
            beforeSend: function()
            {
                
			},
            success: function ( result )
            {                
                var json = JSON.parse(result);
                $('#modal-nuevo').modal('hide');
                if(json.code == 0){
                    
                   $("table > tbody:last").append("<tr id='"+json.id+"'><td>"+nombre.value+"</td><td><span class='label label-table label-success'>Activo</span></td><td></td></tr>");
                    nombre.value = '';
                    
                    $.niftyNoty({
                    type: 'success',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-check fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">Completado</h4>'+
                            '<p class="alert-message">El nuevo registro a sido a&ntildeadido correctamente.</p> </div>',
                    timer : true ? 3000 : 0
                    });
                    
                }else{
                    
                    $('#modal-nuevo').modal('hide');
                    $.niftyNoty({
                    type: 'warning',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">Advertencia '+json.code+'</h4>'+
                            '<p class="alert-message">'+json.message+'</p> </div>',
                    timer : false ? 3000 : 0
                    });
                }
            },
            error: function ( result )
            {
                 $.niftyNoty({
                    type: 'danger',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">ERROR </h4>'+
                            '<p class="alert-message">Ocurrio un error, intentelo de nuevo en un momento.</p> </div>',
                    timer : false ? 3000 : 0
                    });
            }
        });
        return false;
    }
    
    function editar(){
        var id = document.getElementById('eid');
        var nombre = document.getElementById('enombre');
        var activo = $('input:radio[name=eactivo]:checked').val();
    
        console.log(activo);
        
        $.ajax( {
            type: 'post',
            url: url + 'catalogos/usuarios/tipos/editar',
            data: { id : id.value, nombre : nombre.value, activo: activo},
            beforeSend: function()
            {
                
			},
            success: function ( result )
            {
                
                $('#modal-editar').modal('hide');
                var json = JSON.parse(result);
                if(json.code == 0){
                    
                    $('#modal-nuevo').modal('hide');

                    $.niftyNoty({
                    type: 'success',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-check fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">Completado</h4>'+
                            '<p class="alert-message">El registro a sido eliminado correctamente.</p> </div>',
                    timer : true ? 3000 : 0
                    });
                    
                   $('#'+id.value).each(function() {
                        var renglon = $(this).find("td");
                        renglon[0].innerHTML =  nombre.value;
                        
                        if(activo == 1 ){
                            renglon[1].innerHTML = '<span class="label label-table label-success">Activo</span>';
                        }else{
                            renglon[1].innerHTML = '<span class="label label-table label-danger">Inactivo</span>';
                        }
                        
                    });
                    
                }else{
                    
                    $('#modal-nuevo').modal('hide');
                    $.niftyNoty({
                    type: 'warning',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">Advertencia '+json.code+'</h4>'+
                            '<p class="alert-message">'+json.message+'</p> </div>',
                    timer : false ? 3000 : 0
                    });
                }
                nombre.value = '';
                $("#eactivo").attr('checked', false);
				$("#lactivo").removeClass('active');
                $("#einactivo").attr('checked', false);
                $("#linactivo").removeClass('active');
            },
            error: function ( result )
            {
                 $.niftyNoty({
                    type: 'danger',
                    container : 'floating',
                    html : '<div class="media-left">'+
                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                            '<div class="media-body">'+
                            '<h4 class="alert-title">ERROR </h4>'+
                            '<p class="alert-message">Ocurrio un error, intentelo de nuevo en un momento.</p> </div>',
                    timer : false ? 3000 : 0
                    });
            }
        });
    }
    
    function modal(datos){

		//var dato = $('.selected');
		//var id = dato[0].attributes.id.value;
		var id = datos;

		$.ajax({
				data : {'id':id},
				url  : url+'Usuario_tipo/consultar_tipo',
				type : 'post',
				beforeSend: function(){
				},
				success: function(data){
					var json  = JSON.parse(data);

                    nombre.value = '';
                    $("#eactivo").attr('checked', false);
				    $("#lactivo").removeClass('active');
                    $("#einactivo").attr('checked', false);
                    $("#linactivo").removeClass('active');
                    
					$("#enombre").val(json[0].tip_usu_nombre);
					if(json[0].tip_usu_activo == 1 ){
						$("#eactivo").attr('checked', true);
						$("#lactivo").addClass('active');
                        
					}else{
                        $("#einactivo").attr('checked', true);
						$("#linactivo").addClass('active');
					}
					
                    $('#eid').val(id);
                    //new Switchery(document.getElementById('eactivo'));
					$("#modal-editar").modal();
				}
			});		
	}
    
    function eliminar(datos){
        //var dato = $('.selected');
        //var id = dato[0].attributes.id.value;
        var id = datos;
        
        if(id != ''){
            var nombre = '';
           $('#'+id).each(function() {
                var renglon = $(this).find("td");
                nombre = renglon[0].innerHTML;
            });
            
            bootbox.confirm({
                message : "<h4 class='text-thin'>ELIMINAR LA INFORMACIÓN DE UN TIPO</h4><p>Estas apunto de eliminar el siguiente registro: <b>"+nombre+"</b> </p>",
                buttons: {
                    confirm: {
                        className: "btn-danger",
                        label: "Eliminar"
                    }
                },
                callback : function(result) {
                    if(result){
                        //var dato = $('.selected');
		                //var id = dato[0].attributes.id.value;
                        $.ajax( {
                            type: 'post',
                            url: url + 'catalogos/usuarios/tipos/eliminar',
                            data: { id : id},
                            beforeSend: function()
                            {

                            },
                            success: function ( result )
                            {

                                var json = JSON.parse(result);
                                if(json.code == 0){
                                    var table = $('#tblDatos');
                                    //table.row('.selected').remove().draw( false );
                                    $('#'+id).closest('tr').remove();
                                    
                                    $('#modal-nuevo').modal('hide');
                                    $.niftyNoty({
                                    type: 'success',
                                    container : 'floating',
                                    html : '<div class="aler alert-succes media fade in"><div class="media-left">'+
                                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                                            '<i class="fa fa-check fa-lg"></i> </span> </div>'+
                                            '<div class="media-body">'+
                                            '<h4 class="alert-title">Completado</h4>'+
                                            '<p class="alert-message">El registro a sido eliminado correctamente.</p> </div> </div>',
                                    timer : true ? 3000 : 0
                                    });
                                }else{

                                    $('#modal-nuevo').modal('hide');
                                    $.niftyNoty({
                                    type: 'warning',
                                    container : 'floating',
                                    html : '<div class="media-left">'+
                                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                                            '<div class="media-body">'+
                                            '<h4 class="alert-title">Advertencia '+json.code+'</h4>'+
                                            '<p class="alert-message">'+json.message+'</p> </div>',
                                    timer : false ? 3000 : 0
                                    });
                                }
                            },
                            error: function ( result )
                            {
                                 $.niftyNoty({
                                    type: 'danger',
                                    container : 'floating',
                                    html : '<div class="media-left">'+
                                            '<span class="icon-wrap icon-wrap-xs icon-circle alert-icon">'+
                                            '<i class="fa fa-exclamation fa-lg"></i> </span> </div>'+
                                            '<div class="media-body">'+
                                            '<h4 class="alert-title">ERROR </h4>'+
                                            '<p class="alert-message">Ocurrio un error, intentelo de nuevo en un momento.</p>'+
                                            '<p>Sugerencias: Revise su conexion a internet.</p> </div>',
                                    timer : false ? 3000 : 0
                                    });
                            }
                        });
                    }else{
                        
                    }
                },
                animateIn: 'bounceIn',
                animateOut : 'bounceOut'
            });
        }
	};
    
</script>
</html>
