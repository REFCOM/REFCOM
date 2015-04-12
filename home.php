<?php 
session_start();
if (!isset($_SESSION["usuario"]) and !isset($_SESSION["password"])) {
 header('location:index.html');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenidos a proyecto Visibilidad</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">AJE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="ultimasActualizaciones.php"><span class="glyphicon glyphicon-time"></span> Ultimas Activaciones</a>
                    </li>
                    <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-search"></span> Busqueda de Clientes<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="busqueda-ruta.php"><span class="glyphicon glyphicon-search"></span> Busqueda por ruta</a></li>
                                <li><a href="Busqueda-fecha.php"><span class="glyphicon glyphicon-search"></span> Busqueda por fecha </a></li>
                                <li><a href=""><span class="glyphicon glyphicon-search"></span> Busqueda por codigo de cliente</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <ul class="nav navbar-top-links navbar-right">	
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" >
                        <span class="glyphicon glyphicon-user"></span>
				<?php	
					echo  strtoupper($_SESSION["usuario"]);
				?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="password.php"><span class="glyphicon glyphicon-pencil"></span> Cambio de contraseña</a></li>
                            <li><a href="salir.php"><span class="glyphicon glyphicon-off"></span> salir</a></li>
                        </ul>
                    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->


        <div class="container">
            <div class="row">
                <div class="col-lg-9 ">
                    <img src="img/user.png" alt="Stanley">
                    <h1>Hola, Bienvenido!</h1>
                    <p>Bienvenido al nuevo manejador de activaciones! </p>
                    <p>Este nuevo sition te ayudara a hacer los reportes de las activaciones mas rapidamente</p>
                    <p>para ver como se usa el sitio has click Aqui <a href="http://vsb360.ajegroup.com"> Guia de usuario!</a> </p>
                
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
        </div> <!-- /container -->


    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
