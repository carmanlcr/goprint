<div class="tab-pane active" id="tab_1_1">
	{!!Form::model($usuario,array('route' => array('user.update',$usuario->username),'method' => 'PUT'))!!}
        <div class="form-group">
            <label class="control-label">Primer Nombre</label>
			{!!Form::text('nombre',$usuario->dato_usuarios->nombre,['class'=>'form-control','placeholder'=>'Nombre','required','autofocus'])!!}
        </div>
        <div class="form-group">
            <label class="control-label">Apellido</label>
            {!!Form::text('apellido',$usuario->dato_usuarios->apellido,['class'=>'form-control','placeholder'=>'Apellido','required'])!!}
        </div>
        <div class="form-group">
            <label class="control-label">Número de Celular</label>
            {!!Form::text('telefono',$usuario->dato_usuarios->telefono,['class'=>'form-control','placeholder'=>'955 555 555'])!!}
        </div>
        <div class="form-group">
            <label class="control-label">Ciudad</label>
            {!!Form::text('ciudad',$usuario->dato_usuarios->ciudad,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
        </div>
        <div class="form-group">
            <label class="control-label">Dirección</label>
            {!!Form::textarea('direccion',$usuario->dato_usuarios->direccion,['class'=>'form-control','size'=>'50x10','placeholder'=>'Direccion'])!!}
        </div>
        <div class="margiv-top-10">
            <button href="javascript:;" class="btn green" type="submit"> Guardar Cambios </button>
            <button type="reset" class="btn default">Cancelar</button>
        </div>
    {!!Form::close()!!}
</div>
<!-- END PERSONAL INFO TAB -->