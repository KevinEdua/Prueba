<nav id="mainnav-container">
	<div id="mainnav">
        <!--Menu-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">
					<ul id="mainnav-menu" class="list-group">
			
						<!--Category name-->
						<li class="list-header">Navegacion</li>
			
						<!--Menu list item-->
						<li <?php if($menu == 'dashboard'){ printf('class="active-link"'); } ?> >
							<a href="<?=base_url()?>inicio">
								<i class="fa fa-dashboard"></i>
								<span class="menu-title">
									<strong>Dashboard</strong>
								</span>
							</a>
						</li>
			
						<!--Menu list item-->
						<li <?php if($menu == 'catalogos'){ printf('class="active-link"'); } ?> >
							<a href="#">
								<i class="fa fa-th"></i>
								<span class="menu-title">
									<strong>Catalogos</strong>
								</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse">
								<li><a href="<?=base_url()?>catalogos/usuarios">Usuarios</a></li>
								<li class="list-divider"></li>
								<li><a href="<?=base_url()?>catalogos">Todos</a></li>
							</ul>
						</li>
			
					</ul>
				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>