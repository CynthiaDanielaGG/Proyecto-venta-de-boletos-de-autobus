<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inicio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="cssCliente/font-awesome.min.css">
        <link rel="stylesheet" href="cssCliente/bootstrap.min.css">
        <link rel="stylesheet" href="cssCliente/customicon.css">
        <link rel="stylesheet" href="cssCliente/linearicons.css">
        <link rel="stylesheet" href="cssCliente/animate.css">

        <!--For Plugins external css-->
        <link rel="stylesheet" href="cssCliente/plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="cssCliente/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="cssCliente/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>


        <header id="header" class="navbar-fixed-top">
            <div class="container">
                <div class="main_menu wow fadeInDown" data-wow-duration="2s">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>


                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="comprarBoleto.php">Comprar Boleto</a></li>
                                    <li><a href="index.html">Cancelar Boleto</a></li>
                                    <li><a href="index.html">Publicar en el foro</a></li>
                                    <li><a href="index.html">Ver Deuda</a></li>
                                    <li><a href="logout_cliente.php" style="background:rgb(181, 42, 6);color:#fff;border-radius:2px;padding:5px 10px;margin-top:10px;">Cerrar Sesion</a></li>

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
            </div>
        </header>
        <!--Home page style-->
<?php
SESSION_START();
 ?>
        <!-- Sections -->
        <section id="bener" class="">
            <div class="bener_overlay">
                <div class="container">
                    <div class="bener_content">
                        <h2>Bienvenido <?php  echo $_SESSION['session_usuario'];?></h2>
                        <p>En Autotransportes Estrella Roja del Sur estamos comprometidos a transportar a nuestros pasajeros
                          y sus pertenecias con altos estándares de calidad y servicio, enfocados en la mejora continua.</p>
                    </div>
                </div> <!-- /container -->
            </div>
        </section>

        <section id="our_features">

        </section>



        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
