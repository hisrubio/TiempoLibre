<!DOCTYPE html>
<html lang="en">
 <?php
      header ('Content-type: text/html; charset=utf-8');
    ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/pencil.png" type="image/x-icon">
    <title>SubirActividad</title>

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
                  <li>
                    <a href="index2.php">HOME</a>
                  </li>
                  <li class="active">
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

    <div class="container" align="center" >
      <div class"row">
        <div class="col-xs-10 col-xs-offset-1" style="margin-top: 20px; margin-bottom: 30px; border: 1px solid; padding: 20px; background-color: LightGray">
      <form name="formActividad" id="formActividad" method="post" action="insactividades.php">
         <div>
           <label>Título Actividad</label><br>
           <input type="text" class="form-control" maxlength="25" size="80" name="tituloActividad" id="tituloActividad">
         </div>
         <div><br>
           <label>Categorias</label><br>
           <div class="row">
         <?php
  include("conexion.php");
  $sql = "SELECT * FROM categorias;";
  $registros=mysqli_query($conexion, $sql);
  while($linea=mysqli_fetch_array($registros)){

    echo "<div class=\"col-md-3 col-sm-4 col-xs-12 checkbox\" style=\" border: 1px solid; border-color:green; border-radius:3px; width: 140px; margin:3px; margin-left:15px;\">
            <input type=\"checkbox\" name=\"$linea[idCategoria]\" id=\"$linea[idCategoria]\" style=\"text-align: left;\">
            $linea[categoria]         
          </div>
        ";
  }
  mysqli_close($conexion);

?>
        </div></div><br>
        <!-- <div>
           <label>Categorias</label>
           <div style="border: 1px solid; width: 100px;">
               <input type="checkbox" name="categorias" id="categorias" style="text-align: left;">exterior
           </div>
         </div>-->
         <div style="padding-left: 0px;">
           <label>Objetivos</label><br>
           <textarea cols="80" class="form-control" rows="3" name="objetivos" id="objetivos" maxlength="160" placeholder="Ponga los objetivos a cumplir"></textarea>
         </div><br>
         <div>
           <label>Descripción de la actividad</label><br>
           <textarea cols="80"  class="form-control" rows="9" name="descripcion" id="descripcion" placeholder="Describa de manera extensa la actividad"></textarea>
         </div><br>
         <div>
           <input type="submit" class="btn btn-primary center-block" name="enviar">
         </div>
      </form>
    </div>
  </div>
</div>

    <div align="center">
    
      
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