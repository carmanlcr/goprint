@extends('admin.template')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <div class="row">
      @include('admin.inicio.registros')
      @include('admin.inicio.grafica1')
      @include('admin.inicio.enviarcorreo')
      @include('admin.inicio.ultimosusuarios')
      @include('admin.inicio.grafica2')
      
    </div>
@stop