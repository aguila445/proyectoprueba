<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>MI WEB|Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>adminlte/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>adminlte/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url();?>adminlte/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>adminlte/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>adminlte/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>adminlte/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>adminlte/assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url();?>adminlte/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                      <?php
                      echo form_open_multipart('usuario/validarusuario',array('id'=>'form1','class'=>'needs-validation','method'=>'post'));
                      ?>

                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">SALAY BOLIVIA</a>
                                <hr style="border: 1px solid red; width: 260px; margin: 0 2px;">
                                <hr style="border: 1px solid yellow; width: 260px; margin: 0 2px;">
                                <hr style="border: 1px solid green; width: 260px; margin: 0 2px;">
                                <p class="text-center m-t-md">ingrese su login y su contraseña</p>
                                <form class="m-t-md" action="index.html">
                                    <div class="form-group">
                                    <input type="text" class="form-control" placeholder="login" name="login">
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">INGRESAR</button>
                                    <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                    <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                    <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2023 &copy; Modern by Steelcoders.</p>
                            </div>
                          <?php
                          echo form_close();
                          ?>

                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<?php echo base_url();?>adminlte/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url();?>adminlte/assets/js/modern.min.js"></script>
        
    </body>
</html>