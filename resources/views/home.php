<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenido</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <!-- Logo Empresa en la pestaña del navegador -->
        <link href='imagenes/empresa/molinstec.ico' rel='shortcut icon' type='image/x-icon'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/sistemacalibracion.css">

        <link rel="stylesheet" href="css/barra.css">


        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple layout-top-nav">
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#" class="navbar-brand"><b>MOLINSTEC</b></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <?php
                            if($usuario->tipo_usuario=='administrador'){include('menus/menu_administrador.php');}
                            if($usuario->tipo_usuario=='vendedor'){include('menus/menu_vendedor.php');}
                            ?>
                        </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php if($usuario->foto==""){ $usuario->foto="imagenes/usuarios/perfil.png"; }  ?>
                                    <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:20px;height:20px;">
                                    <span class="hidden-xs"><?=  $usuario->name;  ?> <?=  $usuario->apellido_paterno;  ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:50px;height:50px;">
                                        <p>
                                            Usuario: <?= $usuario->tipo_usuario ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                    </div>
                <!-- /.container-fluid -->
                </nav>
            </header>

            <div class="content-wrapper" style="min-height:2000px;">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 style="text-align: center">
                        Bienvenido al sistema de calibración de masas y balanzas de la empresa MOLINSTEC
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content" id="contenido_principal">
                    <!-- Small boxes (Stat box) -->

                </section><!-- /.content -->

                <!-- cargador -->
                <div style="display: none;" id="cargador" align="center">
                    <br>

                    <label style="color:#FFF; background-color:#ABB6BA; text-align:center"></label>
                    <center>
                        <img src="imagenes/empresa/espera.gif" alt="cargador" width="200" height="100"><label style="color:#ABB6BA"></label>
                    </center>
                    <br>
                    <hr style="color:#003" width="50%">
                    <br>
                </div>
            </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>  $("#content-wrapper").css("min-height","2000px"); </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- javascript del sistema de calibracion -->
        <script src="js/sistemacalibracion.js"></script>
    </body>
</html>
