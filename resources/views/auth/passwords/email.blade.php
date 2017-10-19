@extends('goprint.template')

@section('content')
    <div class="container pm-containerPadding110">
        <div class="row">
            <div class="col-lg-12 pm-center pm-column-spacing">
                <h5>¿Olvidaste tu contraseña?</h5>
                <div class="pm-column-title-divider">
                    <img height="29" width="29" src="/img/logo/loguito.png" alt="icon">
                </div>
            </div>
        </div>        
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container pm-containerPadding-top-40 pm-containerPadding-bottom-40">
                <div class="row">
                    <div class="row">
                        {!!Form::open(['method'=>'POST','action' => "{{ route('password.email') }}",'route' => 'password.email'])!!}
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    {!!Form::email('email',null,['class'=> 'pm-form-textfield','placeholder' => 'Correo','value' => "{{ old('email') }}",'required'])!!}
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <div class="col-lg-12 pm-center">
                                    {!!Form::button('Resetear Password',['class'=>'pm-form-submit-btn','type'=>'submit'])!!}
                                </div>
                            </div>
                        {!!Form::close()!!}
                    </div>      
                </div>           
            </div>
        </div>
    </div>
@endsection
