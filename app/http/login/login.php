<?php 

/* html para el login*/
echo '
	<html>
		<head>
			<title>Login</title>
		</head>
		<body>
			<h1> Iniciar Sesion </h1>
			<form method= "POST">
				<td> Usuario </td>
				<br>
				<input type="text" name="usuario" > 
				<br>
				<td>Contraseña </td>
				<br>
				<input type="text" name="password" >
				<br>
				<input type="submit" value="Iniciar Sesion">
			</form>
		</body>
	</html>

';
 ?>