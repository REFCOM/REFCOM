<?php 

/* html para el login*/
echo '
	<html>
		<head>
<<<<<<< HEAD
			<meta charset = "utf-8">
    		<meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    		<meta name = "viewport" content = "width = device-width, initial-scale = 1">

    		<!-- CSS de Bootstrap -->
    		<link href = "../../../bootstrap/dist/css/bootstrap.min.css" rel = "stylesheet" media = "screen">
=======
			<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">

    		<!-- CSS de Bootstrap -->
    		<link href="../../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
>>>>>>> master
 
			<title>Login</title>
		</head>
		<body>
<<<<<<< HEAD
			<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar Sesion</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/REFCOM/app/http/login/function/login.class.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="usuario" name="usuario"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="contraseña" name="password" type="password" >
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-lg btn-default btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
		</body>
	</html>
';
 ?>

=======
			<h1> Iniciar Sesion </h1>
			<form class="form-inline" role="form" method= "POST">
				<div class="form_group">
					<td > Usuario </td>
					<br>
					<input type="text" name="usuario" class="form-control" placeholder="Usuario"> 
					<br>
					<td>Contraseña </td>
					<br>
					<input type="text" name="password" class="form-control" placeholder="Contraseña">
					<br>
					<input type="submit" value="Iniciar Sesion" class="btn btn-default">
				</div>
			</form>
		</body>
	</html>

';
 ?>
>>>>>>> master
