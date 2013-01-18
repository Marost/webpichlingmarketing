<?php
//WIDGETS EVENTOS
$rst_wg_eventos=mysql_query("SELECT * FROM pmkt_evento ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_wg_eventos=mysql_fetch_array($rst_wg_eventos);

//VARIABLES
$eventowg_id=$fila_wg_eventos["id"];
$eventowg_url=$fila_wg_eventos["url"];
$eventowg_titulo=$fila_wg_eventos["titulo"];
$eventowg_lugar=$fila_wg_eventos["ev_lugar"];
$eventowg_fecha=$fila_wg_eventos["ev_fecha"];
$eventowg_imagen=$fila_wg_eventos["imagen"];
$eventowg_imagen_carpeta=$fila_wg_eventos["carpeta_imagen"];
?>
<aside>
    <h3>Eventos</h3>
    
  <div id="evnt_titulo">
        <h2><a href="evento/<?php echo $eventowg_url; ?>" title="<?php echo $eventowg_titulo; ?>">
        	<img src="imagenes/upload/<?php echo $eventowg_imagen_carpeta."".$eventowg_imagen; ?>" width="300" alt="<?php echo $eventowg_titulo; ?>"></a></h2>
    </div>
    
    <div id="evnt_datos">
        <p><?php echo $eventowg_lugar; ?></p>
        <p><?php echo $eventowg_fecha; ?></p>
    </div>
    
</aside><!-- FIN SECTION SIDEBAR ASIDE -->