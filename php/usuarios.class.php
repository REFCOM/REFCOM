<?php
# CLASE USUARIO PARA GESTIONAR A LOS USUARIOS DEL SISTEMA

require_once 'session-mysql.class.php';

class usuario extends mysql
{

  #Cuando se crea el objeto se realiza la conexion a la base de datos 
  public function __construct()
  {
    $this->conectar();    
  }

  public function validar_ingreso($usuario,$password)
  {
    if( $usuario!=null and $password!=null)
    {
        # se limpian variables
        $usuario = htmlspecialchars(trim($usuario), ENT_QUOTES);        
        $password = htmlspecialchars(trim($password), ENT_QUOTES);
        # se realiza la consulta a la base de datos
        $r = $this->consulta("SELECT nombreUsuario, password from Usuarios WHERE nombreUsuario='$usuario' AND password=md5('$password'); ");
        # retorna resultado en boolean
        return ( $this->numero_de_filas($r)>0) ? true : false ;          
    }
    else
        return false;    
  }  

}
?>
