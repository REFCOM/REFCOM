<?php 
/*Incluimos el fichecho de coneccion a la DB*/
require '../../database/conection/conectionDB.class.php';

/*Creamos la instancia del objeto*/
$bd = conectionDB::getInstance();

/*query de usuarios*/
$sql = 'SELECT USUARIO, PASSWORD FROM usuario WHERE USUARIO = "gtbaguilar" AND PASSWORD = "gtbaguilar"';

/*Ejecuto el query*/
$stmt = $bd -> ejecutar($sql);

echo '
	<html>
	<head>
		<title>Prueba de coneccion</title>
	</head>
	<body>
	<h1> Esto es una prueba de coneccion a la base de datos</h1>
	<h2> Tabla usuarios</h2>
	</body>
	</html>
';

while ($x = $bd -> obtener_fila($stmt,0)) {
	echo "USUARIO: ".$x['USUARIO'].'<br/>';
}


 ?>