<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <?php 
     include_once('lib/funciones.php');
     $titulo_pagina = "Fundacion cine con vecinos";
     $description="funcion cine con vecinos, saladillo";
     $keywords="saladillo, taller de cine. ";
     include('lib/encabezado.php');
  ?>
  <body>
    <div id="head">
      <?php include('lib/logos.php');?>
    </div>        
    <div id="nav">
       <?php include('lib/nav.php');?>
    </div>
    <div id="main">
      <div id="form">
        <h1>Contactenos</h1>  
        <?php include('lib/concurso.php');?>
      </div>    
       <div class="form1">
        <h2>Recuerde bases</h2>  
        <?php include('lib/bases.php');?>
      </div>
    </div>
    <div id="foot">
      
    </div>
  </body>
</html>
        