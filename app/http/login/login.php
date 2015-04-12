<?php 

/* html para el login*/
echo '
	<html>
		<head>
			<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">

    		<!-- CSS de Bootstrap -->
    		<link href="../../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
			<title>Login</title>
		</head>
		<body>
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