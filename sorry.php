<?php 
session_start();
if (!isset($_SESSION["usuario"]) and !isset($_SESSION["password"])) {
 header('location:../index.html');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Aje</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
     <meta http-equiv="Refresh" content="1;url=http://vsb360.ajegroup.com/">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >AJE</a>
        </div>

      </div>
    </div>

    <!-- +++++ Welcome Section +++++ -->
    <div id="ww">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <img src="assets/fonts/user.png" alt="Stanley">
                    <h1>Hola, Tu Usuario o contraseña son incorrectos!</h1>
                    <p>Intenta de nuevo por favor!</p>

                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /ww -->
    
    
    <!-- +++++ Projects Section +++++ -->
    
    
    
    
    <!-- +++++ Footer Section +++++ -->
    
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Direccion</h4>
                    <p>
                        +502 6626-5000 <br>
                        Km 32 Carr. al Pacifico  Parque Industrial Flor del Campo<br>
                        www.ajegroup.com<br>
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>Otros</h4>
                    <p>
                        
                    </p>
                </div><!-- /col-lg-4 -->
                
                <div class="col-lg-4">
                    <h4>Ayuda</h4>
                    <p>brayan.aguilar.gt@ajegroup.com</p>
                </div><!-- /col-lg-4 -->
            
            </div>
        
        </div>
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
