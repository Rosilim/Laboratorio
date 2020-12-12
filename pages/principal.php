<?php 
// allUsuarios
session_start(); 
require '../class/usuario.php';;
$obj = new Usuario(); 
if (isset($_SESSION["id"])) {
}else{ 
header('Location: ../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <!-- Google Tag Manager -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-W24T6W7"></script><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W24T6W7');</script>
    <!-- End Google Tag Manager -->
    <title>Rosilin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="../assets/css/flaticon.css"> -->
    <!-- Favicon icon -->
    <link  href="ttps://utp.ac.pa/sites/default/files/tropical_utp_logo.jpg">


    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css"> 
    <!-- <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css"> -->
</head>
</head>
<body>
<div class="login-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-section">
                <h5 style="text-align: justify; font-weight: bold">Pantalla Inicial</h5> 
                <h6 style="text-align: justify; font-weight: bold" class="text-danger">Lista de usuarios</h6>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th> 
                    </tr>
                    <?php   
                    $res = $obj->allUsuarios();
                   
                    foreach ($res as $value):?>  
                    <tr>
                        <td><?=$value['nombre']?></td>
                        <td><?=$value['apellido']?></td>
                        <td><?=$value['correo']?></td> 
                    </tr>

                    <?php endforeach;?>
                </table>
                <br>
                <a href="editarUsuario.php" class="btn btn-primary">Editar Usuario en Linea</a>
                </div>
                <footer>
                    <br>
                  <h5 class="text-danger">   <?php  echo $_SESSION["nombre"];?>  <?php echo $_SESSION["apellido"] ?> <a href="../controllers/finsistema.php" class="btn btn-link">(Salir)</a> </h5>
                </footer>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
</body>
</html> 