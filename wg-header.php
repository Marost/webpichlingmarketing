<?php
$urlMenu=$_SERVER["REQUEST_URI"];

//SERVICIOS
$rst_servicios_menu=mysql_query("SELECT * FROM pmkt_servicios ORDER BY titulo ASC;", $conexion);

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
							<img class="w-logo-img" src="imagenes/logo.png" alt="Pichling Sports Marketing">
							<span class="w-logo-title">
								<span class="w-logo-title-h">Pichling Sports Marketing</span>
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
								<!-- THE MAIN IMAGE IN THE 2 SLIDE -->
								<img src="imagenes/slides/slide6.jpg" alt="" />

								<div class="caption large_text lfr"
									 data-x="500"
									 data-y="90"
									 data-speed="300"
									 data-start="800"
									 data-easing="easeOutExpo">Servicios</div>
								<div class="caption medium_text lfr"
									 data-x="500"
									 data-y="150"
									 data-speed="400"
									 data-start="1000"
									 data-easing="easeOutExpo">- Marketing Depotivo</div>
								<div class="caption medium_text lfr"
									 data-x="500"
									 data-y="200"
									 data-speed="500"
									 data-start="1200"
									 data-easing="easeOutExpo">- Eventos Deportivos</div>
								<div class="caption medium_text lfr"
									 data-x="500"
									 data-y="250"
									 data-speed="600"
									 data-start="1400"
									 data-easing="easeOutExpo">- Patrocinio Deportivo</div>
								<div class="caption medium_text lfr"
									 data-x="500"
									 data-y="300"
									 data-speed="700"
									 data-start="1600"
									 data-easing="easeOutExpo">- Coaching Deportivo</div>
							</li>
						</ul>
					</div>
				</div>

			</div>
			<?php } ?>
		</div>

	</div>
</div>