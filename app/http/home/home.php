<?php 

session_start();
if (!isset($_SESSION["USUARIO"])) {
 header('location: ../../../index.html');
}
 
echo '
<html>
<head>
	<title>Home</title>
	<!-- CSS de Bootstrap -->
    		<link href = "../../../bootstrap/dist/css/bootstrap.min.css" rel = "stylesheet" media = "screen">
 			<link href = "../../../bootstrap/dist/fonts/font-awesome/css/font-awesome.css" rel = "stylesheet" media ="screen">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">REFCOM</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Pagos</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Proveedores</a>
                    </li>
                    <li class="page-scroll">
                        <a href="../logout/logout.php">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
   <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive"  alt="">
                    <div class="intro-text">
                        <span class="name">Bienvenido '.$_SESSION["USUARIO"].'</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
'	;
 
?>