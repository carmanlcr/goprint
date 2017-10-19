<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>GoPrint | Perfil de {{ $usuario->username }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="http://www.Goprint.pe, Empresa de Servicio de Impresión">
        <meta name="keywords" content="De la Imprenta a Tus Manos, Envios a todo el Perú">
        <meta name=”robots” content="index,follow">
        <meta name="author" content="GoPrint.pe, Luis Andres Morales Sandoval">
        <link rel="shortcut icon" href="favicon.html">
        <meta name="google-site-verification" content="BaHve3mGJOGw6j9j3poBhB6FT6vOGdcLJLZklwbs_L4">
        <link rel="shortcut icon" href="/img/logo/favicon.ico">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {!!Html::style('/css/bootstrap.min.css')!!}
        {!!Html::style('/css/font-awesome/font-awesome.css')!!}
        {!!Html::style('/css/login/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')!!}
        {!!Html::style('/css/login/assets/global/plugins/uniform/css/uniform.default.css')!!}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!!Html::style('/css/profile/bootstrap-fileinput.css')!!}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        {!!Html::style('/css/login/assets/global/css/components.min.css')!!}
        {!!Html::style('/css/login/assets/global/css/plugins.min.css')!!}
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        {!!Html::style('/css/profile/profile.min.css')!!}
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        {!!Html::style('/css/profile/layout.min.css')!!}
        {!!Html::style('/css/profile/darkblue.min.css')!!}
        {!!Html::style('/css/profile/custom.min.css')!!}
        <!-- END THEME LAYOUT STYLES -->
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white page-sidebar-closed">
        @include('goprint.profile.menu')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('goprint.profile.menuizquierda')
            <!-- BEGIN CONTENT -->
            @include('goprint.profile.informacion')

        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; GoPrint.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">GoPrint!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        {!!Html::script('/js/jquery/jquery-2.1.3.min.js')!!}
        {!!Html::script('/js/bootstrap.min.js')!!}
        <!--<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>-->
        {!!Html::script('/css/login/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')!!}
        {!!Html::script('/js/jquery/jquery.slimscroll.min.js')!!}

        <!--<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>-->
        {!!Html::script('/css/login/assets/global/plugins/uniform/jquery.uniform.min.js')!!}

        <!--<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>-->
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {!!Html::script('/js/profile/bootstrap-fileinput.js')!!}
        {!!Html::script('/js/jquery/jquery.sparkline.min.js')!!}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {!!Html::script('/css/login/assets/global/scripts/app.min.js')!!}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        {!!Html::script('/js/profile/profile.min.js')!!}
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        {!!Html::script('/js/profile/layout.min.js')!!}
        {!!Html::script('/js/profile/demo.min.js')!!}
        <!--<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script> -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>