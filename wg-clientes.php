<?php
//CLIENTES
$rst_clientes=mysql_query("SELECT * FROM pmkt_clientes ORDER BY titulo ASC", $conexion);
?>
<div class="l-submain" style="border: none !important; box-shadow: none;">
	<div class="l-submain-h g-html">

		<h2 style="text-align: center;">Empresas con las que mantenemos Relaciones Comerciales</h2>

		<div class="hr hr_invisible">
			<span class="hr-h">
				<span class="hr-hh"></span>
			</span>
		</div>

		<div class="w-clients type_carousel columns_5">
			<div class="w-clients-h">
				<div class="w-clients-list">
					<div class="w-clients-list-h">

						<?php while($fila_clientes=mysql_fetch_array($rst_clientes)){
							$clientes_titulo=$fila_clientes["titulo"];
							$clientes_imagen=$fila_clientes["imagen"];

							//URL
							$clientes_UrlImg=$web."imagenes/clientes/".$clientes_imagen;
						?>

						<a class="w-clients-item">
							<img src="<?php echo $clientes_UrlImg; ?>" alt="<?php echo $clientes_titulo; ?>" />
						</a>

						<?php } ?>

					</div>
				</div>
				<a class="w-clients-nav to_prev disabled" href="javascript:void(0)" title="Show previous"></a>
				<a class="w-clients-nav to_next" href="javascript:void(0)" title="Show next"></a>
			</div>
		</div>

	</div>
</div>