<?php 
/*Incluimos el fichecho de coneccion a la DB*/
require '../../../../database/conection/conectionDB.class.php';

session_start();

/*User y password enviados por _POST*/
$user = $_POST['usuario'];
$pass = $_POST['password'];


/*Creamos la instancia del objeto*/
$bd = conectionDB::getInstance();


/*query de usuarios*/
$sql = "SELECT USUARIO, PASSWORD FROM usuario WHERE USUARIO = '$user' AND PASSWORD = '$pass'";

/*Ejecuto el query*/
$stmt = $bd->ejecutar($sql);


if ($bd->obtener_fila($stmt,0)>0) {
	$_SESSION["USUARIO"]=$user;
 	header('location: http://localhost/REFCOM/app/http/home/home.php');
}else{
	
}




 ?>