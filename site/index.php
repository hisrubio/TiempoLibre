<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/pencil.png" type="image/x-icon">
    <title>Tiempo Libre Zaragoza</title>

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
            <a data-type='rd-navbar-brand' href="index.html">TIEMPO LIBRE<small>ZARAGOZA</small></a>
          </h1>
        </div>
      </div>


      <div id="stuck_container" class="stuck_container">
        <div class="container">   
          <nav class="navbar navbar-default navbar-static-top pull-left">            
              <div class="">  
                <ul class="nav navbar-nav sf-menu" data-type="navbar">
                  <li class="active">
                    <a href="index.php">HOME</a>
                  </li>
                  <li>
                    <a href="subirActividad.php">Subir Actividad</a>
                  </li>
                  <li>
                    <a href="miCuenta.php">Mi cuenta</a>
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
       <section class="well well1 well1_ins1">
         <div class="container center991">
          <div class="row wow fadeIn" data-wow-duration='2s'>
<?php
  include("conexion.php");
  $sql = "SELECT * FROM actividades;";
  $registros=mysqli_query($conexion, $sql);
  while($linea=mysqli_fetch_array($registros)){

    echo "<div class=\"col-md-4 col-sm-12 col-xs-12\" style=\"margin-bottom:20px;\">
            <div class=\"thumbnail thumb-shadow\">
              <img src=\"$linea[imagen]\">
              <div class=\"caption bg3\">
                <h3>
                  $linea[titulo]
                </h3>
                <div class=\"wrap\">
                  <p>
                    $linea[objetivos]
                  </p>
                  <a href=\"verActividades.php?clave=$linea[idActividad]\" class=\"btn-link fa-angle-right\"></a>
                </div>  
              </div>
            </div>              
          </div>
        ";
  }
  mysqli_close($conexion);
?>
     
          </div>
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
