<?php 
// ob_start();

session_start();

require '../class/usuario.php'; //la clase 

$obj = new Usuario(); 

if(isset($_POST["nueva"])){

$exite =$obj->verificarEmail($_POST["correo"]); 
if(count($exite)== 0){
  
      if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["correo"]) && isset($_POST["password"])  ) {
        
                    $encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$
                            $2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe'); 
                    $data = array(
                        'nombre'=> $_POST["nombre"],
                        'apellido'=> $_POST["apellido"],
                          'correo'=> $_POST["correo"],
                          'password'=> $encriptar, 
                        ); 
                   $resultado = $obj->insertarUsuarios($data);
        
                     if ($resultado == "ok"){ 
                   $_SESSION["error"] = "ok2";
                   $_SESSION["mensaje2"]= "REGISTRADO CORRECTAMENTE";

                   header('Location: ../pages/register.php');
            
                     } 
        
        }else{
            $_SESSION["error"] = "ok";
            $_SESSION["mensaje"]= "LLENE TODOS LOS CAMPOS";
            // header('Location: ../login/Registrar.php');v
        } 

}else{
    $_SESSION["error"] = "ok";

    $_SESSION["mensaje"]= "El Correo ya existe"; 
 
    header('Location: ../pages/register.php');
}
 
   }elseif (isset($_POST["entrar"])) {
     
  
    // $obj->Insertar_administrativos(); //metodo para agregar usuarios administrativos, secretaria o vicedecano.
    if (isset($_POST["correo"]) && isset($_POST["password"])){
        
      $encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$
      $2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe');

    
      $data = array('correo' => $_POST["correo"],'pass' => $encriptar );
      $respuesta = $obj->entrarSistema($data); 
        
     if ($respuesta != false) { 
           $cantidad= count($respuesta);
      
              if ($cantidad >1) {
       
               //borrando una session en especifico
                   unset($_SESSION["errorS"]);
                   unset($_SESSION["error"]);
                   unset($_SESSION["mensaje"]);
                   unset($_SESSION["mensaje2"]);
               //creando session
              
                    $_SESSION["session"]="ok";
                   $_SESSION["nombre"]=$respuesta["nombre"];
                   $_SESSION["apellido"] =$respuesta["apellido"];
                   $_SESSION["correo"] =$respuesta["correo"];
                   $_SESSION["id"] =$respuesta["id_usuario"]; 
                   $_SESSION["foto"] =$respuesta["foto"]; 
                    
                    error_reporting(E_ALL | E_WARNING | E_NOTICE);
                    ini_set('display_errors', TRUE); 
                    header('Location: ../pages/principal.php');
                    
              }else{
                unset($_SESSION["error"]);
                unset($_SESSION["mensaje"]);
                unset($_SESSION["mensaje2"]);
                $_SESSION["errorS"]="ERROR";
                header('Location: ../');
              }

     }else{
        $_SESSION["error"] = "ok";
        $_SESSION["mensaje"]= "LAS CREDENCIALES SON INCORRECTAS";
         header('Location: ../');
     }
      
    
    
    
    
    }else{
      $_SESSION["error"] = "ok";
      $_SESSION["mensaje"]= "LLENE TODOS LOS CAMPOS";
      header('Location: ../');
     }
    
    
     
    } 

?>