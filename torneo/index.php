<?php
	session_start();
	include("../panel@pmarketing/conexion/conexion.php");
	include("../panel@pmarketing/conexion/funciones.php");
?>
<!DOCTYPE HTML>
<html>
	<?php require_once("head.php"); ?>
	<body class="homepage">

	<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<div id="header">
                <div class="container">
                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="active"><a href="index.php">Principal</a></li>
                            <li><a href="register.php">Registro de Equipos</a></li>
                            <li><a href="login.php">Iniciar Sesión</a></li>
                            <li><a href="home.php">Perfil del Equipo</a></li>
                        </ul>
                    </nav>
                </div>
				<?php require_once("nav.php"); ?>
			</div>
			<!-- /Header -->
			
			<!-- Banner -->
			<div id="banner-wrapper" class="container">
				<div class="row">
					<div class="12u">
						<div id="banner">
							<div class="image-box"><a href="#"><img src="images/img06.jpg" alt=""></a>
								<div class="caption"><!--<span>Registra a tu equipo para tener toda la información del Torneo</span>--><a href="login.php" class="button">Iniciar Sesión</a> <a href="register.php" class="button">Registrar Equipo</a></div>
							</div>
						</div>
						<div class="shadow"><a href="#"><img src="css/images/img07.jpg" width="1200" height="50" alt=""></a></div>
					</div>
				</div>
			</div>			
			<!-- /Banner -->
			<div class="divider"></div>
			
		<!-- Featured
			<div id="featured">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section class="first">
								<h2>Blandit Veroeros Consequat</h2>
								<p>Morbi id urna ut massa vestibulum tempor. faucibus eget nibh. Pellentesque ultricies felis quis est auctor ut dictum sapien adipiscing. Quisque eget tempus nunc. Curabitur venenaSed et gravida diam. Proin adipiscing nisi ac libero fringilla tincidunt consequat sed amet lorem ipsum dolor.</p>
								<p><a href="#" class="button">Amet Consequat</a></p>
							</section>
						</div>
						<div class="3u">
							<section>
								<h2>Blandit Veroeros Consequat</h2>
								<p>Mauris posuere eros vel metus laoreet auctor. In sodales tincidunt volutpat. Nunc pulvinar massa id risus porta hendrerit. Nunc nec nibh velit, sit amet consectetur neque dolor.</p>
								<p><a href="#" class="image full"><img src="images/img09.jpg" alt=""></a></p>
							</section>
						</div>
						<div class="3u">
							<section>
								<h2>Blandit Veroeros Consequat</h2>
								<p>Mauris posuere eros vel metus laoreet auctor. In sodales tincidunt volutpat. Nunc pulvinar massa id risus porta hendrerit. Nunc nec nibh velit, sit amet consectetur neque dolor.</p>
								<p><a href="#" class="image full"><img src="images/img10.jpg" alt=""></a></p>
							</section>
						</div>
						<div class="3u">
							<section class="last">
								<h2>Blandit Veroeros Consequat</h2>
								<p>Mauris posuere eros vel metus laoreet auctor. In sodales tincidunt volutpat. Nunc pulvinar massa id risus porta hendrerit. Nunc nec nibh velit, sit amet consectetur neque dolor.</p>
								<p><a href="#" class="image full"><img src="images/img11.jpg" alt=""></a></p>
							</section>
						</div>
					</div>
				</div>
			</div> -->
		<!-- /Featured -->
	
		<!-- Main 
			<div id="main-wrapper">
					<div class="divider">&nbsp;</div>
				<div id="main">
					<div class="container">
						<div class="row">
							<div id="content" class="8u">
								<section>
									<div class="post">
										<header>
											<h2>Blandit Veroeros Consequat</h2>
											<span class="byline">Erat diam dui quis neque suspendisse potenti lorem</span>
										</header>
										<p>This is <strong>Altitude</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
										<div class="image-style"><a href="#" class="image featured"><img src="images/img12.jpg" alt=""></a></div>
										<p><a href="#" class="button">Continue Reading</a></p>
										<div class="separator">&nbsp;</div>
									</div>
								</section>
								<section>
									<header>
										<h2>Blandit Veroeros Consequat</h2>
										<span class="byline">Erat diam dui quis neque suspendisse potenti lorem</span>
									</header>
									<p>Mauris posuere eros vel metus laoreet auctor. In sodales tincidunt volutpat. Nunc pulvinar massa id risus porta hendrerit. Nunc nec nibh velit, sit amet consectetur neque. Ut et erat non eros imperdiet bibendum. Donec sit amet diam dui. Ut quis neque diam, sit amet sollicitudin magna. Aenean eu suscipit tellus. Suspendisse potenti. Nullam gravida nisl auctor tortor viverra adipiscing aenean et velit vel felis iaculis semper vitae quis erat.</p>
									<div class="image-style"><a href="#" class="image featured"><img src="images/img19.jpg" alt=""></a></div>
									<p><a href="#" class="button">Continue Reading</a></p>
								</section>
							</div>
							<div id="sidebar" class="4u">
							
								<div class="row">
									<div class="6u">
										<section>
											<section> <a href="#" class="image full"><img src="images/img13.jpg" alt=""></a>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
											<section>
												<p><a href="#" class="image full"><img src="images/img14.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
											<section>
												<p><a href="#" class="image full"><img src="images/img15.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
										</section>
									</div>
									<div class="6u">
										<section>
											<section> <a href="#" class="image full"><img src="images/img16.jpg" alt=""></a>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
											<section>
												<p><a href="#" class="image full"><img src="images/img20.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
											<section>
												<p><a href="#" class="image full"><img src="images/img21.jpg" alt=""></a></p>
												<h2>Sed Amet Phasellus</h2>
												<p>Mauris et posuere vel metus auctor. In sodales et tincidunt id risus porta hendrerit. Nunc nec nibh velit, amet consectetur neque. Ut sed non eros imperdiet bibendum.</p>
											</section>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		<!-- /Main -->
			
		</div>
	<!-- /Wrapper -->

	<!-- Copyright -->
    <?php require_once("copyright.php"); ?>
	</body>
</html>