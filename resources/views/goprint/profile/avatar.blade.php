<div class="tab-pane" id="tab_1_2">
    <p> Actualiza tu foto de perfil. </p>
    {!!Form::open(['role' => 'form','route'=>'user.avatar','method'=>'POST','enctype' => 'multipart/form-data','files'=>true])!!}
        <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ $usuario->imagen }}" alt="" /> </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Selecciona una imagen </span>
                        <span class="fileinput-exists"> Cambiar </span>
                        <input type="file" name="imagen"> </span>
                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
            <div class="clearfix margin-top-10">
                <span class="label label-danger">NOTA!</span>
                <span> Tu información no será compartida.</span>
            </div>
        </div>
        <div class="margin-top-10">
            <button href="javascript:;" class="btn green" type="submit"> Enviar </button>
            <button href="javascript:;" class="btn default" type="reset"> Cancelar </button>
        </div>
    </form>
</div>
<!-- END CHANGE AVATAR TAB -->