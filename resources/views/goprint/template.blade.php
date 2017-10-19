<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','GoPrint: De la imprenta a tus manos.')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="http://www.Goprint.pe, Empresa de Servicio de Impresión">
    <meta name="keywords" content="De la Imprenta a Tus Manos, Envios a todo el Perú">
    <meta name=”robots” content="index,follow">
    <meta name="author" content="GoPrint.pe, Luis Andres Morales Sandoval">
    <link rel="shortcut icon" href="favicon.html">
    <meta name="google-site-verification" content="BaHve3mGJOGw6j9j3poBhB6FT6vOGdcLJLZklwbs_L4">
    <link rel="shortcut icon" href="/img/logo/favicon.ico">

	{!!Html::style('/css/bootstrap.min.css')!!}
	{!!Html::style('/css/menu/master.css')!!}
	{!!Html::style('/css/responsive.css')!!}
	{!!Html::style('/css/font-awesome/font-awesome.css')!!}
	{!!Html::style('/css/menu/meanmenu.css')!!}
	{!!Html::style('/css/menu/superfish.css')!!}
	{!!Html::style('/css/theme-color-selector/theme-color-selector.css')!!}
	{!!Html::style('/css/slider/owl-carousel.css')!!}
	{!!Html::style('/css/typicons/typicons.min.css')!!}
	{!!Html::style('/css/animate.css')!!}
	{!!Html::style('/css/slider/flexslider-post.css')!!}
	{!!Html::style('/css/jquery/prettyPhoto.css')!!}
	{!!Html::style('/css/jquery/jquery-ui.css')!!}
	{!!Html::style('/css/menu/nuevo.css')!!}

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic%7COpen+Sans+Condensed:300,300italic,700%7CRaleway:400,200,300,100,600,500,700,800,900%7COswald:400,300,700%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7CRoboto+Condensed:400,300,300italic,400italic,700,700italic%7CRoboto+Slab:400,100,300,700%7CLato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	@yield('css')
</head>
<body>
	@if(\Session::get('message'))
		@include('goprint.vistaparcial.index.message')
	@elseif(\Session::get('messageError'))
		@include('goprint.vistaparcial.index.messageError')
	@endif

	@include('goprint.vistaparcial.header.menu')

	@yield('content')

	@include('goprint.vistaparcial.footer.footer')


	<!--Archviso JS-->
	{!!Html::script('/js/jquery/jquery-2.1.3.min.js')!!}
	{!!Html::script('/js/jquery/jquery.viewport.mini.js')!!}
	{!!Html::script('/js/jquery/jquery.easing.1.3.js')!!}
	{!!Html::script('/js/bootstrap.min.js')!!}
	{!!Html::script('/js/modernizr.custom.js')!!}
	{!!Html::script('/js/slider/owl-carousel.js')!!}
	{!!Html::script('/js/main.js')!!}
	{!!Html::script('/js/jquery/jquery.tooltip.js')!!}
	{!!Html::script('/js/superfish.js')!!}
	{!!Html::script('/js/hoverIntent.js')!!}
	{!!Html::script('/js/jquery/jquery.stellar.js')!!}
	{!!Html::script('/js/theme-color-selector.js')!!}
	{!!Html::script('/js/jquery/jquery.PMSlider.js')!!}
	{!!Html::script('/js/jquery/jquery.meanmenu.min.js')!!}
	{!!Html::script('/js/jquery/jquery.flexslider.js')!!}
	{!!Html::script('/js/jquery/jquery.testimonials.js')!!}
	{!!Html::script('/js/wow.min.js')!!}
	{!!Html::script('/js/jquery/jquery-migrate-1.2.1.js')!!}
	{!!Html::script('/js/jquery/jquery.prettyPhoto.js')!!}
	{!!Html::script('/js/tinynav.js')!!}
	{!!Html::script('/js/jquery/jquery-ui.js')!!}
	@yield('js')
	
	<p id="back-top" class="visible-lg visible-md visible-sm"></p>
</body>
</html>