<?php
//WIDGET GALERIA
$rst_wg_galeria=mysql_query("SELECT * FROM pmkt_galeria WHERE id>0 ORDER BY id DESC;", $conexion);
?>
<aside>
    <h3>Galeria de Fotos</h3>
    
    <div id="wg_galeria" class="svwp">
        <ul>
        	<?php while($fila_wg_galeria=mysql_fetch_array($rst_wg_galeria)){
				//VARIABLE
				$galeriawg_id=$fila_wg_galeria["id"];
				$galeriawg_titulo=$fila_wg_galeria["titulo"];
				$galeriawg_url=$fila_wg_galeria["url"];
				
				//FOTOS - GALERIA
				$rst_wg_galeria_slide=mysql_query("SELECT * FROM pmkt_galeria_slide WHERE noticia=$galeriawg_id AND orden=0;", $conexion);
				$fila_wg_galeria_slide=mysql_fetch_array($rst_wg_galeria_slide);
				
				//VARIABLE
				$galeriawg_imagen=$fila_wg_galeria_slide["imagen"];
				$galeriawg_imagen_carpeta=$fila_wg_galeria_slide["carpeta"];
			?>
            <li><a href="galeria/<?php echo $galeriawg_id."-".$galeriawg_url; ?>" 
            title="<?php echo $galeriawg_titulo; ?>">
                <img width="290" height="210" src="imagenes/galeria/<?php echo $galeriawg_imagen_carpeta."thumb/".$galeriawg_imagen; ?>" alt="<?php echo $galeriawg_titulo; ?>" /></a></li>
            <?php } ?>
        </ul>
    </div><!-- GALERIA WEB GALERIA -->
    
</aside><!-- FIN SECTION SIDEBAR ASIDE -->