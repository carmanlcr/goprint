<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->

                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Inicio</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            @if(Auth::check())
                                @if($usuario->id === Auth::user()->id)
                                    <li>
                                        <span>Mi Perfil</span>
                                    </li>
                                @else
                                    <li>
                                        <span>{{ Auth::user()->username }}</span>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <span>{{ $usuario->username }}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    @if(Auth::check())
                        @if($usuario->id === Auth::user()->id)
                            <h3 class="page-title"> Mi perfil | Cuenta
                                <small>Editar Información</small>
                            </h3>
                        @else
                            <h3 class="page-title"> {{ $usuario->username }} | Cuenta</h3>
                        @endif
                    @else
                        <h3 class="page-title"> {{ $usuario->username }} | Cuenta</h3>
                    @endif
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                    	@if($usuario->social === 1)
                                        	<img src="{{ $usuario->imagen }}" class="img-responsive" alt=""> </div>
                                        @else
											<img src="/img/ordenes/{{ $usuario->imagen }}" class="img-responsive" alt=""> </div>
                                        @endif
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> {{ $usuario->dato_usuarios->nombre.' '.$usuario->dato_usuarios->apellido }} </div>
                                        <!--<div class="profile-usertitle-job"> Developer </div>-->
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <!--<button type="button" class="btn btn-circle green btn-sm">Seguir</button>
                                        <button type="button" class="btn btn-circle red btn-sm">Mensaje</button>-->
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <!--<div class="profile-usermenu">
                                        <ul class="nav">

                                            <li class="active">
                                                <a href="page_user_profile_1_account.html">
                                                    <i class="icon-settings"></i> Perfil de Usuario </a>
                                            </li>

                                        </ul>
                                    </div>-->
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->

                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Cuenta de Perfil</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Información Personal</a>
                                                    </li>
                                                    @if($usuario->social === 0)
	                                                    <li>
	                                                        <a href="#tab_1_2" data-toggle="tab">Cambiar Avatar</a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="#tab_1_3" data-toggle="tab">Cambiar Contraseña</a>
	                                                    </li>
	                                                @endif
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                   @include('goprint.profile.informacionpersonal')
                                                    <!-- CHANGE AVATAR TAB -->
                                                   @if(Auth::check() && Auth::user()->social === 0)
                                                	@include('goprint.profile.avatar')
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Contraseña Actual</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Repite Nueva Contraseña</label>
                                                                <input type="password" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <a href="javascript:;" class="btn green"> Cambiar Contraseña </a>
                                                                <a href="javascript:;" class="btn default"> Cancelar </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
													@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->