<?php 
require '../class/usuario.php';;
$obj = new Usuario(); 

$user = $obj->traerOneUser($_POST["id"]); 

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["correo"])  ) {
  
    $archivo= $user['foto']; 

 if (isset($_FILES['archivo']['name']) && $_FILES['archivo']['name'] != "") {

     $target_path = "../assets/img/";
     $target_path = $target_path . basename( $_FILES['archivo']['name']);
     
     if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
          chmod($target_path, 0777);
         echo "ha sido subido";
     } else{
         echo "Ha ocurrido un error, trate de nuevo!";
     }

     $archivo = $_FILES['archivo']['name'];
 }

 $data = array(
    'nombre'=> $_POST["nombre"],
    'apellido'=> $_POST["apellido"],
    'correo'=> $_POST["correo"], 
    'foto'=>  $archivo , 
    'id'=> $_POST["id"], 

  ); 
  
  $resultado = $obj->updateUsuario($data);
  header('Location: ../pages/editarUsuario.php');
  
}
?>