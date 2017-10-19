@extends('goprint.template')
	@section('content')
		<div class="pm-sub-header-container">
        	<div class="pm-sub-header-info">
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                            <p class="pm-page-title">Contactanos</p>
                            <p class="pm-page-message">Necesitas ayuda?, Nuestro personal está a tu disposición</p>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="pm-sub-header-breadcrumbs">	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
 		<!-- Sub-header area end -->
        
        <!-- BODY CONTENT starts here -->
                
        <!-- PANEL 1 -->
        
        <!-- PANEL 2 -->
        <div class="container pm-containerPadding110">
        	<div class="row">
            	<div class="col-lg-12 pm-center pm-column-spacing">
                	<h5> Formulario de Contacto</h5>
                    <div class="pm-column-title-divider">
                    	<img height="29" width="29" src="img/logo/loguito.png" alt="icon">
                    </div>
                </div>
            </div>
            <div class="row">
            	{!!Form::open(['role' => 'form','route'=>'enviarcorreo','method'=>'POST','id'=>'formi'])!!}
            		<div class="col-lg-6 col-md-6 col-sm-12">
                        {!!Form::text('nombre',null,['class'=>'pm-form-textfield','placeholder'=>'Nombre','required'])!!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        {!!Form::email('correo',null,['class'=>'pm-form-textfield','placeholder'=>'Correo Electrónico','required'])!!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        {!!Form::text('asunto',null,['class'=>'pm-form-textfield','placeholder'=>'Asunto','required'])!!}
                    </div>
                    <div class="col-lg-12">
                        {!!Form::textarea('mensaje',null,['class'=>'pm-form-textarea','size'=>'50x10','placeholder'=>'Mensaje','required'])!!}
                    </div>
                    <div class="col-lg-12 pm-center">
                        {!!Form::button('Enviar Mensaje',['class'=>'pm-form-submit-btn','type' =>'submit'])!!}
                    </div>
            	{!!Form::close()!!}
                <div id="result"></div>
            </div>
        </div>
	@stop