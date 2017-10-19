<div class="col-lg-4 col-md-6">
    <!-- USERS LIST -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Ultimos miembros</h3>
      <div class="box-tools pull-right">
        <span class="label label-danger">{{ count($ultimos_usuarios) }} Nuevos miembros</span>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body no-padding">
      <ul class="users-list clearfix">
        @foreach($ultimos_usuarios as $ultimo)
          <li>
            @if($ultimo->imagen == null)
              <img src="/img/ordenes/no-image.jpg" alt="User Image">
            @else
              <img src="/img/ordenes/{{ $ultimo->imagen }}" alt="User Image">
            @endif
            <a class="users-list-name" href="{{ route('profile',$ultimo->username) }}">{{ $ultimo->dato_usuarios->nombre.' '.$ultimo->dato_usuarios->apellido }}</a>
            <span class="users-list-date">{{ Date::parse($ultimo->created_at)->format('l j \d\e\ F \d\e\ Y')}}</span>
          </li>
        @endforeach
      </ul><!-- /.users-list -->
    </div><!-- /.box-body -->
    <div class="box-footer text-center">
      <a href="{{ route('users.index') }}" class="uppercase">Ver todos los usuarios</a>
    </div><!-- /.box-footer -->
  </div><!--/.box -->
</div><!-- /.col -->
