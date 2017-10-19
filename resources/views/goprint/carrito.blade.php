@extends('goprint.template')

@section('content')

    @include('goprint.carrito.ordenes')
    @include('goprint.carrito.total')

    @section('js')
        <!--Para actualizar item del carrito-->
        <script>
            $(document).ready(function() {
                //Actualizar los item del carrito
                $(".btn-update-item").on('click',function(e){
                    e.preventDefault();
                    var id = $(this).data('id');
                    var href = $(this).data('href');
                    var cantidad = $("#producto_"+id).val();

                    window.location.href = href + "/" + cantidad;
                });
            });
        </script>

        <!--Para eliminar item del carrito-->
        <script>
            $(function(){
                $(".pm-cart-remove").on('click',function(e){
                    e.preventDefault();
                    var href = $(this).data('href');

                    window.location.href = href;
                });
            });
        </script>
    @endsection
@stop
