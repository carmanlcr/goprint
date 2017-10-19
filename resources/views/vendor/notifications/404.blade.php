@extends('goprint.template')

@section('title','Upsss! Pagina no encontrada')

@section('content')

	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h2>
            404 Error Page
          </h2>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Uupps! Esta pagina no existe</h3>
              <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="{{ route('index') }}">volver al inicio</a>
              </p>
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

@stop