<?php
echo "hola principio  ";
  session_start();
  echo "session_start()";
    if( $_POST )
 {
	 echo "  if post";
     #Comprueba que las variables existan
     if ( isset( $_POST['usuario'] ) and isset( $_POST['password'] ) ){
		 echo   "if insset";
		 echo $_POST['usuario']."    ".$_POST['password'];
            # archivo php necesario
   require_once 'usuarios.class.php';
   echo " require";
            # instancia a clase usuario
            $usuario = new usuario();
       if( $usuario->validar_ingreso($_POST['usuario'] , $_POST['password']) ){
                //crea instancia de sesion segura
                $_SESSION["usuario"]=$_POST['usuario'];//variable de sesion;
                $_SESSION["password"]=$_POST['password'];
                # si usuario existe -> redireccionar a nueva pagina 
                echo "home";
               header('location: http://vsb360.ajegroup.com/home.php');
               echo "adios";
            }else{ 
				echo "sorry";
              header('location: http://vsb360.ajegroup.com/sorry.php'); 
              
            }

          }
          echo "hola fuera if"; 
          require_once'cerrarsesion.php';
        }
        echo "hasta abajo";

?>
