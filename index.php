<?php
    session_start();

    error_reporting(E_ALL ^ E_NOTICE);
?>
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
    <body>       
       <div id="head">
          <?php include('lib/logos.php');?>
        </div>        
        <div id="nav">
           <?php include('lib/nav.php');?>
        </div>
        <div id="main">            
            <div class="co">
                <p class="f"><a  href="concurso_cine_con_vecinos.php">BASES</a></p>
                <p class="f"><a href="concurso_cine_con_vecinos.php">INSCRIPCION</a></p>
            </div>
            <div class="co1">                
               <iframe width="900" height="500" src="https://www.youtube.com/embed/ClgwtvivwQw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>                 
    </body>
</html>