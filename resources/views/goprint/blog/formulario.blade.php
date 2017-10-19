<div class="col-lg-12">
    {!!Form::text('titulo',null,['class'=>'pm-form-textfield','placeholder'=>'Titulo','required'])!!}
</div>
<div class="col-lg-12">
    {!!Form::textarea('descripcion',null,['class'=>'pm-form-textarea','size'=>'50x10','placeholder'=>'Descripcion','required'])!!}
</div>
<div class="col-lg-12">
    {!!Form::file('imagen');!!}
</div>