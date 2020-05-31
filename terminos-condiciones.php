<?php
include("panel@pmarketing/conexion/conexion.php");
include("panel@pmarketing/conexion/funciones.php");

//VARIABLES
$sc_home=true;

?>
<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Términos y condiciones | <?php echo $web_nombre ?></title>

	<?php require_once("wg-script-header.php"); ?>

	<!-- TWITTER CARD -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@pichlingmkt">
	<meta name="twitter:creator" content="@pichlingmkt">
	<meta name="twitter:title" content="<?php echo $web_nombre." | ".$social_palabrasclave; ?>">
	<meta name="twitter:description" content="<?php echo $social_nosotros; ?>">
	<meta name="twitter:image" content="<?php echo $web."imagenes/logo.png" ?>">
	<meta name="twitter:domain" content="pichlingmarketing.com">
	<!-- FIN TWITTER CARD -->

	<!-- OPEN GRAPH -->
	<meta property="og:type" content='website' /> 
	<meta property="og:site_name" content='<?php echo $web_nombre; ?>' /> 
	<meta property="og:title" content='<?php echo $web_nombre." | ".$social_palabrasclave; ?>'/> 
	<meta property="og:description" content='<?php echo $social_nosotros; ?>'/>
	<meta property="og:url" content='<?php echo $web; ?>' /> 
	<meta property="og:image" content='<?php echo $web."imagenes/logo.png" ?>' />
	<!-- FIN OPEN GRAPH -->

</head>
<body class="l-body">

<div class="l-background"></div>

<!-- CANVAS -->
<div class="l-canvas type_boxed col_cont">
	<div class="l-canvas-h">

		<!-- HEADER -->
		<?php require_once("wg-header.php"); ?>
		<!-- /HEADER -->

		<!-- MAIN -->
		<div class="l-main">
			<div class="l-main-h">

				<div class="l-submain for_pagehead">
					<div class="l-submain-h g-html i-cf">
						<div class="w-pagehead">
							<h1>Términos y condiciones</h1>
							<p></p>
							<!-- breadcrums -->
							<div class="g-breadcrumbs">
								<a href="index.html" class="g-breadcrumbs-item">Inicio</a>
								<span class="g-breadcrumbs-separator">&raquo;</span>
								<span class="g-breadcrumbs-item">Términos y condiciones</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="l-submain">
					<div class="l-submain-h g-html">
					
						<div class="w-timeline">
							<div class="w-timeline-h">

								<div class="w-timeline-sections">
									<div class="w-timeline-section active animate_afr">
										<div class="w-timeline-section-h">
										
											<div class="w-timeline-section-content">
												<div class="g-cols">
														<!--<p>
1. Datos de identificación

Usted está visitando el Portal del Diario Gestión (el “Sitio Web o la Aplicación”), de titularidad de EMPRESA EDITORA EL COMERCIO S.A., con R.U.C. N°20143229816, y SERVICIOS ESPECIALES DE EDICIÓN S.A. con R.U.C. N° 20100544866, ambas con domicilio en Jirón Santa Rosa N°300, Cercado de Lima, provincia y departamento de Lima (el “Grupo El Comercio”).

2. Acceso y aceptación del Usuario

Estos Términos y Condiciones regulan el acceso y utilización por parte del Usuario de los servicios y facilidades que ofrece el Sitio Web o la Aplicación. La condición de “Usuario” es adquirida por la mera navegación y/o utilización del Sitio Web o la Aplicación.

El Usuario puede acceder y navegar por el Sitio Web o la Aplicación libremente sin necesidad de registrarse y/o suscribirse. Sin embargo, en algunos casos se requerirá del registro y/o suscripción para acceder a los servicios suministrados por el Grupo El Comercio o por terceros, a través del Sitio Web o la Aplicación, los cuales pueden estar sujetos a condiciones específicas.

Asimismo, el acceso y navegación por el Sitio Web y la Aplicación por parte del Usuario implica la aceptación sin reservas de todas las disposiciones incluidas en los presentes Términos y Condiciones.

3. Modificación de los Términos y Condiciones

El Grupo El Comercio se reserva expresamente el derecho a modificar, actualizar o ampliar en cualquier momento los presentes Términos y Condiciones.

Cualquier modificación, actualización o ampliación producida en los presentes Términos y Condiciones será inmediatamente publicada siendo responsabilidad del Usuario revisar los Términos y Condiciones vigentes al momento de la navegación.

En caso de que el Usuario no estuviera de acuerdo con las modificaciones mencionadas, podrá optar por no hacer uso de los servicios ofrecidos por el Grupo El Comercio a través del Sitio Web o la Aplicación.

4. Servicios ofrecidos por el Sitio Web o la Aplicación

El Sitio Web o la Aplicación ofrecen una plataforma a la que los Usuarios pueden acceder para conocer información y/o noticias de actualidad, tanto nacionales como internacionales. El Usuario también tiene la posibilidad de generar y crear contenido en el Sitio Web o la Aplicación y compartir dichos contenidos a través de redes sociales u otras plataformas, conforme a los estipulado en el numeral 8 de estos Términos y Condiciones.

Los Usuarios reconocen haber proporcionado voluntariamente sus datos personales, de conformidad con nuestra Política de Privacidad, a fin de poder disfrutar de los servicios ofrecidos por el Sitio Web o la Aplicación.

5. Uso del Sitio Web o la Aplicación

Los servicios que se ofrecen a través del presente Sitio Web o Aplicación se encuentran disponibles sólo para aquellas personas que puedan celebrar contratos legalmente vinculantes de acuerdo a lo establecido por la ley aplicable. Al acceder al Sitio Web o la Aplicación, el Usuario declara ser mayor de 18 años de edad y encontrarse facultado a asumir obligaciones vinculantes con respecto a cualquier tipo de responsabilidad que se produzca por el uso del Sitio Web o la Aplicación.

El Usuario se compromete a utilizar el Sitio Web o la Aplicación de conformidad con la Ley, los presentes Términos y Condiciones, la moral, las buenas costumbres y el orden público. En este sentido, la utilización por parte del Usuario del Sitio Web o la Aplicación se realizará de conformidad con las siguientes directivas:

El Usuario se obliga a no utilizar el Sitio Web o la Aplicación con fines o efectos ilícitos o contrarios al contenido de los presentes Términos y Condiciones, lesivos de los intereses o derechos de terceros, o que de cualquier forma pueda dañar, inutilizar, deteriorar la plataforma o impedir un normal disfrute del Sitio Web o la Aplicación por otros Usuarios.

El Usuario se compromete expresamente a no destruir, alterar, inutilizar o, de cualquier otra forma, dañar los datos, programas o documentos electrónicos y demás que se encuentren en el Sitio Web o la Aplicación.

El Usuario se compromete a no obstaculizar el acceso a otros Usuarios mediante el consumo masivo de los recursos informáticos a través de los cuales el Grupo El Comercio presta el servicio, así como a no realizar acciones que dañen, interrumpan o generen errores en dichos sistemas o servicios.

El Usuario se compromete a no intentar penetrar o probar la vulnerabilidad de un sistema o de una red propia del Sitio Web o la Aplicación, así como quebrantar las medidas de seguridad o de autenticación del mismo.

El Usuario se compromete a hacer un uso adecuado de los contenidos que se ofrecen en el Sitio Web o la Aplicación y a no emplearlos para incurrir en actividades ilícitas, así como a no publicar ningún tipo de contenido ilícito.

El Usuario se compromete a no utilizar el Sitio Web o la Aplicación para, a modo de referencia, más no limitativo, enviar correos electrónicos masivos (spam) o correos electrónicos con contenido amenazante, abusivo, hostil, ultrajante, difamatorio, vulgar, obsceno o injurioso. Asimismo, se compromete a no utilizar un lenguaje ilícito, abusivo, amenazante, obsceno, vulgar, racista, ni cualquier lenguaje que se considere inapropiado, ni anunciar o proporcionar enlaces a sitios que contengan materia ilegal u otro contenido que pueda dañar o deteriorar la red personal o computadora de otro Usuario.

El Grupo El Comercio se reserva la potestad de determinar a su libre criterio, cuándo se produce la vulneración de cualquiera de los preceptos enunciados en el presente apartado por parte de los contenidos publicados por algún Usuario, así como la potestad de eliminar dichos contenidos del Sitio Web o la Aplicación.

En el caso en que un Usuario infrinja lo establecido en el presente apartado, el Grupo El Comercio procederá a realizar alguna de las siguientes acciones, dependiendo de la gravedad o recurrencia de la infracción:

 Amonestación al Usuario.

 Suspensión temporal de la cuenta del Usuario.

 Cancelación definitiva de la cuenta del Usuario.

 Acciones por responsabilidades civiles o penales.

6. Registro y responsabilidad por contraseñas

El Usuario podrá navegar por el Sitio Web o la Aplicación sin necesidad de registrarse en una cuenta. Sin embargo, en algunos casos se requerirá del registro y/o suscripción para acceder al Sitio Web o la Aplicación.

La cuenta de Usuario no debe incluir el nombre de otra persona con la intención de hacerse pasar por esa persona, ni ser ofensivo, vulgar, obsceno o contrario a la moral y las buenas costumbres.

Los Usuarios registrados y/o suscritos contarán con una clave personal o contraseña con la cual podrán acceder a su cuenta personal. Cada Usuario es responsable de su propia contraseña, y deberá mantenerla bajo absoluta reserva y confidencialidad, sin revelarla o compartirla, en ningún caso, con terceros. Cada Usuario es responsable de todas las acciones realizadas mediante el uso de su contraseña. Toda acción realizada a través de la cuenta personal de un Usuario se presume realizada por el Usuario titular de dicha cuenta.

En el caso de que un Usuario identificara que un tercero conociera y usara su contraseña y su cuenta personal, deberá notificarlo de manera inmediata al Grupo El Comercio.

El Grupo El Comercio no será responsable de cualquier daño relacionado con la divulgación del nombre de un Usuario o de su contraseña, o del uso que cualquier persona dé al nombre de un Usuario o contraseña.

El Grupo El Comercio puede solicitar el cambio de un nombre de Usuario y contraseña cuando considere que la cuenta ya no es segura, o si se recibe alguna queja o denuncia respecto al nombre de un Usuario que viole derechos de terceros.

Las comunicaciones concernientes a la administración de la contraseña pueden ser enviadas a contacto@peruid.pe

7. Propiedad Intelectual

Todos los derechos de propiedad intelectual del Sitio Web o la Aplicación y de sus contenidos y diseños pertenecen al Grupo El Comercio o, en su caso, a terceras personas. En aquellos casos en que sean propiedad de terceros, el Grupo El Comercio cuenta con las licencias necesarias para su utilización.

Quedan expresamente prohibidas la reproducción, distribución, transformación, comunicación pública, puesta a disposición o cualquier modo de utilización, de la totalidad o parte de los contenidos del Sitio Web o la Aplicación, en cualquier soporte y por cualquier medio técnico, sin la autorización del Grupo El Comercio. El Usuario se compromete a respetar los derechos de propiedad intelectual de titularidad del Grupo El Comercio y de terceros.

Asimismo, queda expresamente prohibida la utilización o reproducción de cualquier marca registrada, nombre o logotipo que figure en el Sitio Web o la Aplicación sin la autorización previa y por escrito del Grupo El Comercio, así como la utilización del software que opera el Sitio Web o la Aplicación con excepción de aquellos usos permitidos bajo estos Términos y Condiciones.

Finalmente, quedan igualmente prohibidas a título enunciativo las siguientes prácticas:

La presentación de una página del Sitio Web o la Aplicación en una ventana que no pertenezca al Grupo El Comercio, mediante la técnica denominada "framing" a no ser que se cuente con la autorización previa y por escrito del Grupo El Comercio.

La inserción de una imagen difundida en el Sitio Web o la Aplicación en una página no perteneciente al Grupo El Comercio, mediante la técnica denominada "inline linking", si ello no cuenta con la autorización previa y por escrito del Grupo El Comercio.

8. Contenido Generado por el Usuario

Existen determinadas secciones en las que el Usuario puede crear o generar contenido, como las zonas de comentarios, blogs, conversaciones en foros, entre otros. En dichas situaciones el Usuario podrá cargar videos, audios, gráficos, imágenes, producir textos, entre otros, (“Contenido Generado por el Usuario” o “CGU”).

El Usuario se compromete a cumplir las directivas de Uso del Sitio Web o la Aplicación contenidas en el numeral 5 de los presentes Términos y Condiciones. En específico, el Usuario se compromete a no utilizar el Sitio Web o la Aplicación para incluir contenido amenazante, abusivo, hostil, ultrajante, difamatorio, vulgar, obsceno o injurioso. Asimismo, se compromete a no utilizar un lenguaje ilícito, abusivo, amenazante, obsceno, vulgar, racista, ni cualquier lenguaje que se considere inapropiado.

El Usuario declara ser titular originario de todos los derechos de propiedad intelectual sobre el CGU. Sin embargo, al cargar dicho contenido en el Sitio Web o la Aplicación, el Usuario otorga al Grupo El Comercio una autorización o licencia no exclusiva, libre de pago de regalías, ilimitada e irrevocable y que aplica globalmente sobre todos los derechos, títulos e intereses del CGU, a fin de que el Grupo El Comercio pueda utilizarlo, incluyendo, entre otros, el derecho a reproducirlo, modificarlo, crear trabajos derivados, editarlo, adaptarlo, traducirlo, distribuirlo, comercializarlo, ponerlo a disposición del público y cualquier forma de utilización, a través de cualquier medio, sea a través del Sitio Web o la Aplicación, como de medios no electrónicos.

Cabe indicar que la autorización brindada al Grupo El Comercio no es exclusiva, razón por la cual el Usuario puede continuar utilizando el CGU en cualquier medio e incluso permitir a otros que lo utilicen, siempre que tal uso no perjudique e interfiera con la autorización y derechos que el Usuario le otorga al Grupo El Comercio.

De igual forma, el Usuario reconoce y acepta que otros Usuarios de los Sitios Web o Aplicaciones del Grupo El Comercio visualicen, descarguen, enlacen y accedan al CGU y utilicen dichos contenidos de acuerdo con las posibilidades que el Sitio Web o la Aplicación ofrecen, de conformidad con lo establecido en el numeral 5 de este documento y siempre que no tengan uso comercial.

El Grupo El Comercio no garantiza la veracidad, exactitud, exhaustividad y actualidad del CGU en el Sitio Web o la Aplicación. En cualquier caso, el Usuario será el único responsable de las manifestaciones falsas, inexactas o difamatorias que realice y de los perjuicios que pudiera causar al Sitio Web o la Aplicación o a terceros por la información que facilite.

El Grupo El Comercio no se hace responsable por el CGU y traslada toda responsabilidad sobre éstos a cada Usuario proveedor de dichos contenidos.

9. Enlaces de terceros

En el supuesto de que en el Sitio Web o la Aplicación se dispusieran enlaces o hipervínculos hacia otros sitios de Internet, el Grupo El Comercio declara que no ejerce ningún tipo de control sobre dichos sitios y contenidos. En ningún caso el Grupo El Comercio asumirá responsabilidad alguna por los contenidos de algún enlace perteneciente a una web ajena, ni garantizará la disponibilidad técnica, calidad, fiabilidad, exactitud, veracidad, validez y constitucionalidad de cualquier material o información contenida en los hipervínculos u otros lugares de Internet.

Estos enlaces se proporcionan únicamente para informar al Usuario sobre la existencia de otras fuentes de información sobre un tema concreto, y la inclusión de un enlace no implica la aprobación de la página web enlazada por parte del Grupo El Comercio.

10. Limitación de responsabilidad e indemnidad

Salvo que así lo establezca la legislación aplicable de obligado cumplimiento, el uso que el Usuario haga del Sitio Web o la Aplicación o de todas las funcionalidades que el Sitio Web o la Aplicación ofrecen, incluyendo cualquier contenido, publicación o herramienta, se ofrece “tal cual” y “según su disponibilidad” sin declaraciones o garantías de ningún tipo, tanto explícitas como implícitas, incluidas entre otras, las garantías de comerciabilidad, adecuación a un fin particular y no incumplimiento. El Grupo El Comercio no garantiza que el Sitio Web o la Aplicación sea siempre seguro o esté libre de errores, ni que funcione siempre sin interrupciones, retrasos o imperfecciones.

El Grupo El Comercio no se hace responsable de los posibles daños o perjuicios en el Sitio Web o la Aplicación que se puedan derivar de interferencias, omisiones, interrupciones, virus informáticos, averías o desconexiones en el funcionamiento operativo del sistema electrónico, de retrasos o bloqueos en el uso de este sistema electrónico causados por deficiencias o sobrecargas en el sistema de Internet o en otros sistemas electrónicos, así como también de daños que puedan ser causados por terceras personas mediante intromisiones ilegítimas fuera del control del Grupo El Comercio.

Asimismo, el Grupo El Comercio no se hace responsable por la calidad, utilidad e idoneidad de los productos, servicios o facilidades ofrecidas al Usuario a través del Sitio Web o la Aplicación, y no responderá por las posibles reclamaciones que se pudieran formular relacionadas con este extremo.

11. Datos de Carácter Personal

Los distintos tratamientos de datos personales que el Grupo El Comercio realiza a través del Sitio Web o la Aplicación, así como las finalidades de dichos tratamientos, serán detallados específicamente en la Política de Privacidad del Sitio Web o la Aplicación a la que el Usuario podrá acceder a través del siguiente enlace: Política de Privacidad.

12. Comunicaciones

El Usuario acepta expresamente que la dirección de correo electrónico consignada en el formulario de registro y/o suscripción será el medio de contacto oficial entre el Sitio Web o la Aplicación y el Usuario, siendo absoluta responsabilidad de este último verificar que dicho correo electrónico esté siempre activo y funcional para poder recibir todas las comunicaciones procedentes del Sitio Web o la Aplicación.

Los mensajes o comunicaciones del Sitio Web o la Aplicación a los Usuarios sólo pueden provenir de las páginas o cuentas oficiales de éste en redes sociales u otros medios. En caso se detectará que algún Usuario está enviando comunicaciones o realizando publicaciones en nombre del Sitio Web o la Aplicación, Grupo El Comercio iniciará las acciones correctivas y legales pertinentes a fin de proteger al resto de Usuarios de posibles riesgos de confusión.

De otro lado, toda comunicación que el Usuario desee dirigir al Sitio Web o la Aplicación deberá realizarla a través de la siguiente dirección de correo electrónico: jlira@diariogestion.com.pe

13. Fuerza mayor

El Grupo El Comercio no será responsable por cualquier retraso o falla en el rendimiento o la interrupción en la prestación de los servicios que pueda resultar directa o indirectamente de cualquier causa o circunstancia más allá de su control razonable, incluyendo, pero sin limitarse a fallas en los equipos o las líneas de comunicación electrónica o mecánica, robo, errores del operador, clima severo, terremotos o desastres naturales, huelgas u otros problemas laborales, guerras, o restricciones gubernamentales.

14. Libro de reclamaciones

Conforme a lo establecido en el Código de Protección y Defensa del Consumidor, Ley N° 29571, el Sitio Web o la Aplicación pone a disposición del Usuario un Libro de Reclamaciones virtual a fin de que éste pueda registrar sus quejas o reclamos formales sobre los servicios ofrecidos a través del Sitio Web o la Aplicación. El Libro de Reclamaciones virtual puede ser encontrado en el siguiente enlace: http://gec.pe/libro/inicio/elcomercio

15. Autoridades y requerimientos legales

El Grupo El Comercio coopera con las autoridades competentes y con terceros para garantizar el cumplimiento de las leyes en materia de protección de derechos de propiedad intelectual, prevención del fraude, protección al consumidor y otras materias.

El Grupo El Comercio podrá revelar la información personal del Usuario del Sitio Web o la Aplicación bajo requerimiento de las autoridades judiciales o gubernamentales competentes, en la medida en que discrecionalmente lo entienda necesario, para efectos de investigaciones conducidas por ellas, cuando se trate de investigaciones de carácter penal o de fraude, o las relacionadas con piratería informática, la violación de derechos de autor, infracción de derechos de propiedad intelectual u otra actividad ilícita o ilegal que pueda exponer al Sitio Web o la Aplicación o a sus Usuarios a cualquier responsabilidad legal.

Asimismo, el Grupo El Comercio se reserva el derecho de comunicar información sobre sus Usuarios a otros Usuarios, a entidades o a terceros, cuando haya motivos suficientes para considerar que la actividad de un Usuario sea sospechosa de intentar o cometer un delito o intentar perjudicar a otras personas. Este derecho será utilizado por el Grupo El Comercio a su entera discreción cuando lo considere apropiado o necesario para mantener la integridad y seguridad del Sitio Web o la Aplicación y la de sus Usuarios, para hacer cumplir los presentes Términos y Condiciones, y a efectos de cooperar con la ejecución y cumplimiento de la ley.

16. Inexistencia de sociedad o relación laboral

La participación de un Usuario en el Sitio Web o la Aplicación no constituye ni crea contrato de sociedad, de representación, de mandato, como así tampoco relación laboral alguna entre dicho Usuario y el Grupo El Comercio.

17. Cesión de posición contractual

Los Usuarios autorizan expresamente la cesión de estos Términos y Condiciones y de su información personal en favor de cualquier persona que (i) quede obligada por estos Términos y Condiciones y/o (ii) que sea el nuevo responsable del banco de datos que contenga su información personal. Luego de producida la cesión, el Grupo El Comercio no tendrá ninguna responsabilidad con respecto de cualquier hecho que ocurra partir de la fecha de la cesión. El nuevo responsable asumirá todas y cada una de las obligaciones del Grupo El Comercio establecidas en los presentes Términos y Condiciones y en la Política de Privacidad respecto al tratamiento, resguardo y conservación de la información personal de los usuarios del Sitio Web o la Aplicación.

18. Ley aplicable y jurisdicción

Los presentes Términos y Condiciones se rigen por la ley peruana y cualquier disputa que se produzca con relación a la validez, aplicación o interpretación de los mismos, incluyendo la Política de Privacidad, será resuelta en los tribunales del Cercado de Lima.

</p>-->
												</div>
											</div>
											
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

				<?php require_once("wg-clientes.php"); ?>				

			</div>
		</div>
		<!-- /MAIN -->

	</div>
</div>
<!-- /CANVAS -->

<!-- FOOTER -->
<?php require_once("wg-footer.php"); ?>
<!-- /FOOTER -->

<?php require_once("wg-script-footer.php"); ?>

</body>
</html>
