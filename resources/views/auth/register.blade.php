@extends('goprint.template')

@section('content')
    <div class="container pm-containerPadding110">
        <div class="row">
            <div class="col-lg-12 pm-center pm-column-spacing">
                <h5>Registro de Usuarios</h5>
                <div class="pm-column-title-divider">
                    <img height="29" width="29" src="img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>
        <div class="container pm-containerPadding-top-40 pm-containerPadding-bottom-40">
            <div class="row">
                <div class="row">
                    {!!Form::open(['role' =>'form','method' => 'POST','route' => 'register'])!!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::text('nombre',null,['id'=>'nombre','class'=> 'pm-form-textfield','placeholder' => 'Nombre','value' => "{{ old('nombre') }}",'required','autofocus'])!!}
                            </div>
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::text('apellido',null,['id'=>'apellido','class'=> 'pm-form-textfield','placeholder' => 'Apellido','value' => "{{ old('apellido') }}",'required'])!!}
                            </div>
                            @if ($errors->has('apellido'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('apellido') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::email('email',null,['id'=>'email','class'=> 'pm-form-textfield','placeholder' => 'Correo','value' => "{{ old('email') }}",'required'])!!}
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::text('username',null,['id'=>'username','class'=> 'pm-form-textfield','placeholder' => 'Usuario','value' => "{{ old('username') }}",'required'])!!}
                            </div>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::password('password',['id'=>'password','class'=>'pm-form-textfield','placeholder'=>'Contraseña','required','id' => 'password'])!!}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--Aqui esta la contraseña-->

                        <div class="form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                {!!Form::password('password_confirmation',['class'=>'pm-form-textfield','placeholder'=>'Repite Contraseña','required','id' => 'password-confirm'])!!}
                            </div>
                        </div><!--Aqui esta la contraseña repetida-->

                        <div class="form-group">
                            <div class="col-lg-12 pm-center">
                                {!!Form::button('<i class="fa fa-user-plus" aria-hidden="true"></i> Registrar',['id'=>'registrar','class'=>'pm-form-submit-btn','type' =>'submit'])!!}
                            </div>
                        </div> <!--Aquí esta el boton de registrar-->
                    {!!Form::close()!!}
                </div>
                <!-- Product 1 -->
                <!-- Product 1 end -->       
            </div>
        </div><!-- /.row -->    
    </div>
@endsection
