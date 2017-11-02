<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/pencil.png" type="image/x-icon">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
   


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand' href="index2.php">TIEMPO LIBRE<small>ZARAGOZA</small></a>
          </h1>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
          <nav class="navbar navbar-default navbar-static-top pull-left">            
              <div class="">  
                <ul class="nav navbar-nav sf-menu" data-type="navbar">
                  <li class="active">
                    <a href="index2.php">HOME</a>
                  </li>
                  <li>
                    <a href="subirActividad.php">Subir Actividad</a>
                  </li>
                  <li>
                    <a href="perfilUsuario.php">Mi cuenta</a>
                  </li>
                </ul>                           
              </div>
          </nav>   
        </div>

      </div>  
    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->
    <main>        
      <section class="well well4">
            <div class="container" align="center" style="margin-top: 15px; margin-bottom: 30px; border: 1px solid; width: 65%; padding: 15px; background-color: LIGHTGREEN; border-radius: 15px; text-align: left">
              
<?php
  $cla=$_GET['clave'];

  include("conexion.php");
  $sqlA = "SELECT * FROM actividades where idActividad=$cla";
  $registrosA=mysqli_query($conexion, $sqlA);
  $sql = "SELECT * FROM actividades as a, actividad_categoria as u, categorias as c where a.idActividad=u.idActividad and c.idCategoria=u.idCategoria and a.idActividad=$cla";
  $registros=mysqli_query($conexion, $sql);
  $sqlCo = "SELECT * FROM actividades as a, comentarios as c where a.idActividad=c.idActividad and a.idActividad=$cla";
  $registrosCo=mysqli_query($conexion, $sqlCo);

  //<img style=\"width:300px; height:200px\" src=\"$lineaA[imagen]\"> Para meter la imagen al ver la actividad; entretitulo e idUsuario

  while($lineaA=mysqli_fetch_array($registrosA)){
    echo "<div class=\"col-md-12 col-sm-12 col-xs-12\">
            <h2 style=\"text-align:center\">
              $lineaA[titulo]
            </h2><br>
            <p>               
              subida por @$lineaA[idUsuario]<br>
            </p>
            <p>
              <label>Categorias</label><br>";
            
    while($linea=mysqli_fetch_array($registros)){
      echo "<div style=\"display:inline-block; border:1px solid; border-radius:5px; border-color:white; margin-left:5px; padding:3px; background-color:DODGERBLUE
      ; color:white\">$linea[categoria]</div>";
    }
      
      echo "</p>
            <p>
              <label>Objetivos</label><br>
              $lineaA[objetivos]<br>
              <label>Descripcion</label><br>
              $lineaA[actividad]
            </p>
        ";
    }

    echo "<label>Comentarios</label><br><div style=\"height:150px; overflow:auto; padding:4px; overflow-x:hidden\">";
    while($lineaCo=mysqli_fetch_array($registrosCo)){
      echo "<div style=\"border: 1px solid; border-radius:7px; padding:5px; border-color:grey; background-color:LIGHTGRAY\"><p style=\"text-decoration: underline;\">@$lineaCo[idUsuario]</p>
            $lineaCo[comentario]</div><br>";


    }

    echo"</div><form name=\"formComentario\" id=\"formComentario\" method=\"post\" action=\"inscomentarios.php?clave=$cla\">
      <label>Añadir Comentario</label><br>
      <textarea cols=\"50\" rows=\"3\" name=\"comentario\" id=\"comentario\"></textarea>
      <div>
        <input type=\"submit\" name=\"Añadir\" value=\"Añadir\">
      </div>
    </form>";
    mysqli_close($conexion);
  
    echo"</div>"
    ?>

      </div>        

      </section>
      
    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">
    <div  >
      <h6 class="title">Quienes Somos</h6>
      
    </div>
  </footer>  
      
  <footer class="top-border">

    <section class="well1">
      <div class="container"> 
            <p class="rights">
              Business Company  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
              More Business Templates at <a rel="nofollow" href="http://www.templatemonster.com/category.php?category=418&type=1" target="_blank">TemplateMonster.com</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
