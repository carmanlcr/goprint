@extends('goprint.template')

@section('content')
	<div id="pm_layout_wrapper" class="pm-full-mode">
		<br>
		@include('goprint.checkout.orden')
		<hr>
		@include('goprint.checkout.metodopago')
	</div>
@stop