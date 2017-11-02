<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/pencil.png" type="image/x-icon">
    <title>Mi cuenta</title>

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
            <a data-type='rd-navbar-brand' href="index.php">TIEMPO LIBRE<small>ZARAGOZA</small></a>
          </h1>
        </div>
      </div>

 
    </header>
    <div class="top-border">
    <div class="container center">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-10 inline" style="margin-top: 20px; margin-bottom: 30px; margin-left: 50px;">
          <div>
            <p>Inicio de sesión: </p>
          </div>
          <div  style=" border: 2px solid; padding: 20px; background-color: aqua; border-color: yellow; border-radius: 10px;">
            <form name="login" id="login" method="post" action="login.php">
               <div>
                 <label>Nombre de Usuario: </label><br>
                 <input type="text" size="34px" name="usuario" id="usuario" style="border-radius: 5px">
               </div>
               <div>
                 <label>Contraseña: </label><br>
                 <input type="password" size="34px" name="contraseña" id="contraseña" style="border-radius: 5px">
               </div>
               <div style="text-align: center; margin-top: 10px; ">
                 <input type="submit" name="Iniciar Sesión" style="border-radius: 5px">
               </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-10 inline" style="margin-top: 20px; margin-bottom: 30px; margin-left: 50px;">
          <div>
            <p>Registrarse: </p>
          </div>
            <div style=" border: 2px solid; padding: 20px; background-color: aqua; border-color: yellow; border-radius: 10px;">
              <form name="formUsuario" id="formUsuario" method="post" action="insusuarios.php">
                 <div>
                   <label>Nombre de Usuario: </label><br>
                   <input type="text" name="nombreUsuario" id="nombreUsuario" style="border-radius: 5px">
                 </div>
                 <div>
                   <label>Nombre y Apellidos: </label><br>
                   <input type="text" size="32" name="nombreApellidos" id="nombreApellidos" style="border-radius: 5px">
                 </div>
                 <div>
                   <label>Correo Electrónico: </label><br>
                   <input type="email" size="32" name="correoElectronico" id="correoElectronico" style="border-radius: 5px">
                 </div>
                 <div>
                   <label>Fecha de Nacimiento: </label><br>
                   <input type="date" name="fecNac" id="fecNac" style="height: 30px; width: 140px; border-radius: 5px">
                 </div>
                 <div>
                   <label>Contraseña: </label><br>
                   <input type="text" name="password" id="password" style="border-radius: 5px"> 
                 </divtrue                 <div style="text-align: center; margin-top: 10px; ">
                   <input type="submit" name="Enviar datos" style="border-radius: 5px">
                 </div>
              </form>
            </div>
          </div>
        
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