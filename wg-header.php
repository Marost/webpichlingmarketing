<?php
$urlMenu=$_SERVER["REQUEST_URI"];

//SERVICIOS
$rst_servicios_menu=mysql_query("SELECT * FROM pmkt_servicios;", $conexion);

?>
<div class="l-header type_normal">
	<div class="l-header-h">

		<!-- subheader: top -->
		<div class="l-subheader at_top type_fixed">
			<div class="l-subheader-h i-cf">

				<!-- NAV -->
				<nav class="w-nav">
					<div class="w-nav-h">
						<div class="w-nav-select">
							<select class="w-nav-select-h">
							</select>
						</div>
						<div class="w-nav-list layout_hor width_stretch level_1">
							<div class="w-nav-list-h">
								
								<div class="w-nav-item level_1 <?php if($urlMenu=="/"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="/" class="w-nav-anchor level_1">Inicio</a>
									</div>
								</div>
								
								<div class="w-nav-item level_1 <?php if($urlMenu=="/nosotros"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="nosotros" class="w-nav-anchor level_1">Nosotros</a>
									</div>
								</div>

								<div class="w-nav-item level_1 <?php if($urlMenu=="/servicios"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="javascript:;" class="w-nav-anchor level_1">Servicios</a>
										<div class="w-nav-list place_down show_onhover level_2">
											<div class="w-nav-list-h">
												
												<?php while($fila_servicios_menu=mysql_fetch_array($rst_servicios_menu)){
														$servicios_menu_id=$fila_servicios_menu["id"];
														$servicios_menu_url=$fila_servicios_menu["url"];
														$servicios_menu_titulo=$fila_servicios_menu["titulo"];

														//URL
														$servicios_menu_UrlWeb=$web."servicios/".$servicios_menu_url;
												?>
												<div class="w-nav-item level_2">
													<div class="w-nav-item-h">
														<a href="<?php echo $servicios_menu_UrlWeb; ?>" class="w-nav-anchor level_2"><?php echo $servicios_menu_titulo; ?></a>
													</div>
												</div>
												<?php } ?>
												
											</div>
										</div>
									</div>
								</div>
								
								<div class="w-nav-item level_1 <?php if($urlMenu=="/eventos"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="eventos" class="w-nav-anchor level_1">Eventos</a>
									</div>
								</div>

								<div class="w-nav-item level_1 <?php if($urlMenu=="/galeria"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="galeria" class="w-nav-anchor level_1">Galería de Fotos</a>
									</div>
								</div>
                                
								<div class="w-nav-item level_1 <?php if($urlMenu=="/clientes"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="clientes" class="w-nav-anchor level_1">Clientes</a>
									</div>
								</div>
								
								<div class="w-nav-item level_1 <?php if($urlMenu=="/noticias"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="noticias" class="w-nav-anchor level_1">Noticias</a>
									</div>
								</div>
								
								<div class="w-nav-item level_1 <?php if($urlMenu=="/contacto"){ ?>active<?php } ?>">
									<div class="w-nav-item-h">
										<a href="contacto" class="w-nav-anchor level_1">Contacto</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>

			</div>
		</div>

		<div class="l-subheader at_middle">
			<div class="l-subheader-h i-cf">

				<div class="w-logo sloganat_bottom">
					<div class="w-logo-h">
						<a class="w-logo-link" href="/">
							<img class="w-logo-img" src="imagenes/logo.png" alt="PSM Sports Marketing">
							<span class="w-logo-title">
								<span class="w-logo-title-h">PSM Sports Marketing</span>
							</span>
						</a>
					</div>
				</div>

			</div>
		</div>
		<div class="l-subheader at_bottom">

			<?php if($sc_slider==true){ ?>
			<div class="l-subheader-h i-cf">

				<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							<li data-transition="random">
								<img src="imagenes/slide/Slide01.jpg" alt="" />
							</li>
							<li data-transition="random">
								<img src="imagenes/slide/Slide02.jpg" alt="" />
							</li>
                            <li data-transition="random">
								<img src="imagenes/slide/Slide03.jpg" alt="" />
							</li>
                            <li data-transition="random">
								<img src="imagenes/slide/Slide04.jpg" alt="" />
							</li>
							<li data-transition="random">
								<img src="imagenes/slide/Slide05.jpg" alt="" />
							</li>
                            <li data-transition="random">
								<img src="imagenes/slide/Slide06.jpg" alt="" />
							</li>
                            <li data-transition="random">
								<img src="imagenes/slide/Slide07.jpg" alt="" />
							</li>
						</ul>
					</div>
				</div>

			</div>
			<?php } ?>
		</div>

	</div>
</div>