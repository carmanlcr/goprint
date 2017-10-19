<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title>@yield('title','GoPrint: Panel de Administración')</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="http://www.Goprint.pe, Empresa de Servicio de Impresión">
    <meta name="keywords" content="De la Imprenta a Tus Manos, Envios a todo el Perú">
    <meta name=”robots” content="index,follow">
    <meta name="author" content="GoPrint.pe, Luis Andres Morales Sandoval">
    <link rel="shortcut icon" href="favicon.html">
    <meta name="google-site-verification" content="BaHve3mGJOGw6j9j3poBhB6FT6vOGdcLJLZklwbs_L4">
    <link rel="shortcut icon" href="/img/logo/favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!!Html::style('/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('/css/font-awesome/font-awesome.css')!!}
    <!-- Ionicons -->
    {!!Html::style('/css/admin/ionicons.min.css')!!}
    <!-- Theme style -->
    {!!Html::style('/css/admin/AdminLTE.min.css')!!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {!!Html::style('/css/admin/skins/_all-skins.min.css')!!}
    <!-- iCheck -->
    {!!Html::style('/css/admin/blue.css')!!}
    <!-- Morris chart -->
    {!!Html::style('/css/admin/morris.css')!!}
    <!-- jvectormap -->
    {!!Html::style('/css/admin/jquery-jvectormap-1.2.2.css')!!}
    <!-- Date Picker -->
    {!!Html::style('/css/admin/datepicker3.css')!!}
    <!-- Daterange picker -->
    {!!Html::style('/css/admin/daterangepicker-bs3.css')!!}
    <!-- bootstrap wysihtml5 - text editor -->
    {!!Html::style('/css/admin/bootstrap3-wysihtml5.min.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    @yield('css')
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      @include('admin.menu.menu1')
      @include('admin.menu.desplegable')
      @yield('content')
      @include('admin.footer.footer')
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    {!!Html::script('/js/jquery/jQuery-2.1.4.min.js')!!}
    <!-- jQuery UI 1.11.4 -->
    {!!Html::script('/js/jquery/jquery-ui.js')!!}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    {!!Html::script('/js/bootstrap.min.js')!!}
    <!-- Morris.js charts -->
    {!!Html::script('/js/admin/raphael-min.js')!!}
    {!!Html::script('/js/admin/morris.min.js')!!}
    <!-- Sparkline -->
    {!!Html::script('/js/jquery/jquery.sparkline.min.js')!!}
    <!-- jvectormap -->
    {!!Html::script('/js/jquery/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('/js/jquery/jquery-jvectormap-world-mill-en.js')!!}
    <!-- jQuery Knob Chart -->
    {!!Html::script('/js/jquery/jquery.knob.js')!!}
    <!-- daterangepicker -->
    {!!Html::script('/js/admin/moment.min.js')!!}
    {!!Html::script('/js/admin/daterangepicker.js')!!}
    <!-- datepicker -->
    {!!Html::script('/js/admin/bootstrap-datepicker.js')!!}
    <!-- Bootstrap WYSIHTML5 -->
    {!!Html::script('/js/admin/bootstrap3-wysihtml5.all.min.js')!!}
    <!-- Slimscroll -->
    {!!Html::script('/js/jquery/jquery.slimscroll.min.js')!!}
    <!-- FastClick -->
    {!!Html::script('/js/admin/fastclick.min.js')!!}
    <!-- AdminLTE App -->
    {!!Html::script('/js/admin/app.min.js')!!}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {!!Html::script('/js/admin/dashboard.js')!!}
    <!-- AdminLTE for demo purposes -->
    {!!Html::script('/js/admin/demo.js')!!}
  </body>
</html>
