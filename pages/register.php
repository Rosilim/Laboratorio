<?php 
session_start();
session_destroy();
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
                <h3>Nueva Cuenta</h3>
                    <div class="logo-2">
                        <a href="#">
                            <img src="https://utp.ac.pa/sites/default/files/tropical_utp_logo.jpg" alt="logo" style="width: 20%;height: auto" >
                        </a>
                    </div>
                   
                    <form action="../controllers/register_login.php" method="POST">
                    <div class="form-group form-box">
                            <input type="text" name="nombre" class="input-text" placeholder="Nombre"> 
                        </div>
                        <div class="form-group form-box">
                            <input type="text" name="apellido" class="input-text" placeholder="Apellido"> 
                        </div>
                        <div class="form-group form-box">
                            <input type="email" name="correo" class="input-text" placeholder="Correo Electrónico (Unico)"> 
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password" class="input-text" placeholder="Contraseña"> 
                        </div>
                        <div class="form-group mb-0 clearfix">
                            <button type="submit" name="nueva" class="btn-md btn-theme btn-block">Crear Cuenta</button> 
                        </div>
                         
                        <div class="clearfix"></div>
                        <ul class="social-list"> 
                        </ul> 
                    </form>
                    <p>Tienes Cuenta? <a href="../" class="thembo">Entrar Portal</a></p>
                    <div class="text-center">
                    <?php 
                        if (isset($_SESSION["error"])) {
                            if ($_SESSION["error"] =="ok2") {
                            ?>
                            <h6 class="alert alert-success"><?php echo $_SESSION["mensaje2"] ?></h6>
                            <?php
                            }elseif($_SESSION["error"] =="ok"){
                            ?>
                                <h6 class="alert alert-danger"><?php echo $_SESSION["mensaje"] ?></h6>
                            <?php
                            }
                                    }
                            ?>
                </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
</body>
</html>



<!-- http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/logdy/main/login-2.html -->