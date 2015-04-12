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

    <title>Ultimas Actualizaciones</title>

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
                                <li><a href="busqueda-fecha.php"><span class="glyphicon glyphicon-search"></span> Busqueda por fecha </a></li>
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

<div class="col-lg-12">
                    <div  class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time"></span> Ultimas Actualizaciones 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Cod Cliente</th>
                                            <th>Fecha de Activacion</th>
                                            <th>Razon Social</th>
                                            <th>Sucursal</th>
                                            <th>Supervisor</th>
                                            <th>Vendedor</th>
                                            <th>Ruta</th>
                                            <th>Comportamiento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        #require_once '../../php/mysql.class.php';
                                       require("php/session-mysql.class.php");
                                        $conexion = new mysql();
                                        $conexion->conectar();
                                        $numero = 1;
                                        $result = mysql_query("SELECT * FROM Activaciones where fechaActivacion between '2014-09-01' and '2014-09-30';");
                                        while ($row = mysql_fetch_array($result)) {
                                            echo '<tr><td>' . $numero++ . '</td>';
                                            echo '<td>' . $row["codCliente"] . '</td>';
                                            echo '<td>' . date("d-m-y", strtotime($row["fechaActivacion"])) . '</td>';
                                            echo '<td>' . $row["razonSocial"] . '</td>';
                                            echo '<td>' . $row["sucursal"] . '</td>';
                                            echo '<td>' . $row["supervisor"] . '</td>';
                                            echo '<td>' . $row["vendedor"] . '</td>';
                                            echo '<td>' . $row["ruta"] . '</td>';
											echo '<td> <a href="resumencliente.php" >Ver</a></td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
