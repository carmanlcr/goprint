<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>GoPrint | Ingreso de Usuario</title>
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
        {!!Html::style('/css/login/facebook.css')!!}
        <link href="/css/login/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/login/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/css/login/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/css/login/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/css/login/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
    <!-- END HEAD -->
    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" style="background-image:url(css/login/assets/pages/img/login/bg1.jpg)">
                        <img class="login-logo" src="css/login/assets/pages/img/login/logo.png" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content">
                        <h1>Acceso a clientes GoPrint</h1>
                        <p> Accede y ve nuestros productos y promociones. </p>
                        {!!Form::open(['route'=>'login','method'=>'POST','action' => "{{ route('login') }}"])!!}

                            {!! csrf_field() !!}
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Ingresa un usuario y contraseña. </span>
                            </div>
                            <div class="row">
                           
                                <div class="col-xs-6{{ $errors->has('username') ? ' has-error' : '' }}">
                                    {!!Form::text('username',null,['id'=>'username','class'=> 'form-control form-control-solid placeholder-no-fix form-group','placeholder' => 'Usuario','value' => "{{ old('username') }}",'required','autofocus','autocomplete'=>'off'])!!}
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{$errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                

                                
                                <div class="col-xs-6{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {!!Form::password('password',['id'=>'password','class'=>'form-control form-control-solid placeholder-no-fix form-group','placeholder'=>'Contraseña','required'])!!}
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                              
                            </div>
                            <div class="row">
                               <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label>
                                            <input type="checkbox" class="rem-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a class="forget-password" href="{{ route('password.request') }}" id="forget-password">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                    {!!Form::button('<i class="fa fa-sign-in" aria-hidden="true"></i>
                                        Ingresar',['id'=>'btn_ingresar','class'=>'btn blue','type'=>'submit'])!!}
                                        <br>
                                    
                                </div>
                            </div>
                        {!!Form::close()!!}
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                    </div>
                    <p class="col-sm-8 text-right">
                        <button class="facebook"><a href="social/facebook" style="text-decoration: none;">Iniciar sesión con <i class="fa fa-facebook select"></i></a></button>
                    </p>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; GoPrint 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <!-- BEGIN CORE PLUGINS -->
        {!!Html::script('/js/jquery/jquery-2.1.3.min.js')!!}
        {!!Html::script('/js/bootstrap.min.js')!!}
        <script src="/css/login/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/css/login/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/css/login/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/css/login/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/css/login/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/css/login/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/css/login/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/css/login/assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

</html>
