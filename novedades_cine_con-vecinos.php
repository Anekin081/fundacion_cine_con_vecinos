<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <?php 
        include_once('lib/funciones.php');
        $titulo_pagina = "Fundacion cine con vecinos";
        $title="cine con vecinos";
        $description="funcion cine con vecinos, saladillo";
        $keywords="cine argentino, cortos";
        include('lib/encabezado.php');
    ?>
	<div id="head">
	  <?php include('lib/logos.php');?>
	</div>        
	<div id="nav">
	   <?php include('lib/nav.php');?>
	</div>
	<div id="main">
		<div id="nota">
			<h1>Actualidad y nuevos eventos</h1><br> 			
			<?php include('lib/prensa_fundacion_cine_con_vecinos.php');?>						
		</div>
	</div>	
</html> 