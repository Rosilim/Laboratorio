<?php 
 require ('conexion.php');
 class Usuario 
 {
 
    public function insertarUsuarios($data){

        
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $correo = $data['correo'];
        $password = $data['password'];  
        $conn = Conexion::conectar(); 
        $statement = $conn->prepare("INSERT INTO usuario (nombre, apellido,correo, password)  VALUES (?, ?, ?, ?)");
        
        $exito = $statement->execute([$nombre, $apellido, $correo,$password]); 
        echo $exito;

        if ($exito) {
      
            return "ok";
        }else{
            return "error";
        } 

        $statement=null;
    }

    public function verificarEmail($correo){ 
      $conn = Conexion::conectar(); 
      $sql = "SELECT * FROM  usuario as a  WHERE correo = '$correo'";
      $statement = Conexion::conectar()->prepare($sql);
      $statement->execute();  
      return $statement->fetchAll();
    }

    public function traerOneUser($id){ 
        $conn = Conexion::conectar(); 
        $sql = "SELECT * FROM  usuario as a  WHERE id_usuario = '$id'";
        $statement = Conexion::conectar()->prepare($sql);
        $statement->execute();  
        return $statement->fetch();
      }

    public function allUsuarios(){ 
        $conn = Conexion::conectar(); 
        $sql = "SELECT * FROM  usuario";
        $statement = Conexion::conectar()->prepare($sql);
        $statement->execute();  
        return $statement->fetchAll();
      }
  


    public function entrarSistema($data)
    { 
        $email = $data['correo'];
        $pass = $data['pass'];
        echo $email;
        $conn = Conexion::conectar();
        
        $sql = "SELECT * FROM  usuario as a  WHERE correo = '$email' &&  password = '$pass'";
        
        $statement = Conexion::conectar()->prepare($sql);
        $statement->execute();  
      return $statement->fetch();
    }  

    //EXPLCIAR AHORA.
    public function updateUsuario($data){
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $correo = $data['correo'];
        $foto = $data['foto']; 
        $id = $data['id']; 

      
      $conn = Conexion::conectar();

      $statement = $conn->prepare("UPDATE  usuario SET  nombre=?,apellido=?,correo=?,foto=?  WHERE id_usuario ='$id'");
      $exito = $statement->execute([$nombre,$apellido,$correo,$foto]); 
      if ($exito) {
          return "ok";
      }else{
          return "error";
      } 
      $statement=null;
    }

 }
 ?>