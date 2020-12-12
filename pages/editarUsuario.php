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
                <h5 style="text-align: justify; font-weight: bold">Usuario En Linea</h5> 
                <h6 style="text-align: justify; font-weight: bold" class="text-danger">Editar Usuario</h6>
                <br>
                            <?php 
                            $user = $obj->traerOneUser($_SESSION["id"]);  
                            ?> 
                    <div class="row">
                        <div class="col-lg-6">
                        <h6 class="text-justify font-weight-bold">Foto</h6>
                        <div>
                            <?php if ($user["foto"] != null) {?>
                                <img src="../assets/img/<?=$user["foto"]?>" alt="" style="width: 70%;height: 60vh;object-fit: cover;">
                              <?php }else{ ?>
                                <img src="../assets/img/default.png" alt="" style="width: 70%;height: 60vh;object-fit: cover;">
                            <?php } ?>

                           
                        </div>
                        </div>
                           
                        <div class="col-lg-6">
                        <h6 class="text-justify font-weight-bold">Editar Usuario</h6>
                        <form action="../controllers/subirFoto.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group form-box">
                            <input type="text" name="nombre" value="<?=$user['nombre'] ?>" class="input-text" placeholder="Nombre" required> 
                            <input type="hidden" name="id" value="<?=$user['id_usuario'] ?>" required> 
                        </div>
                        <div class="form-group form-box">
                            <input type="text" name="apellido" value="<?=$user['apellido'] ?>" class="input-text" placeholder="Apellido" required> 
                        </div>
                        <div class="form-group form-box">
                            <input type="email" name="correo" value="<?=$user['correo'] ?>" class="input-text" placeholder="Correo Electrónico" required> 
                        </div> 
                        <div class="form-group form-box"> 
                            <input type="file" name="archivo" class="input-text"> 
                        </div> 
                        <div class="form-group mb-0 clearfix">
                            <button type="submit" name="nueva" class="btn-md btn-theme btn-block">Actualizar</button> 
                        </div>
                         
                        <div class="clearfix"></div>
                        <ul class="social-list"> 
                        </ul> 
                    </form>
                        </div>
                    </div>
                    

                <a href="principal.php" class="btn btn-primary">Volver</a>
                </div>
                <footer>
                    <br>
                    <h5 class="text-danger">  <?php  echo $_SESSION["nombre"];?>  <?php echo $_SESSION["apellido"] ?> <a href="../controllers/finsistema.php" class="btn btn-link">(Salir)</a> </h5>
                </footer>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
</body>
</html> 