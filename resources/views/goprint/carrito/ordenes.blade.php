<!-- PANEL 1 -->
<div class="container pm-containerPadding-top-110 pm-containerPadding-bottom-40">

    <div class="row">
        <div class="col-lg-12">
            
            <div class="pm-cart-info-container">
                
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="pm-cart-info-title">
                            <h3>Tienes {{ count($carrito) }} articulos en tu carrito</h3>
                        </div>       
                    </div>
                    @foreach($carrito as $cart)                
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column">
                            <img src="/img/ordenes/{{ $cart->imagen }}" width="50" height="50" alt="{{ $cart->nombre }}"> 
                        </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column text">
                            <a href="{{ route('solicitudproducto',$cart->slug) }}">{{ $cart->nombre }}</a>
                        </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column text">
                            <p>Precio: {{ $cart->precio }} S.</p>
                        </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column quantity">
                                <input type="number" 
                                                    min="1" 
                                                    max="{{ $cart->stock }}"
                                                    value="{{ $cart->cantidad }}"
                                                    id="producto_{{ $cart->id }}"
                                                    align="center"
                                            >
                                            <a href="#" class="btn btn-warning btn-update-item" 
                                                data-href="{{ route('actualizar_carrito',$cart->slug) }}" 
                                                data-id="{{ $cart->id }}">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                            </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column text">
                            <p>Sub-Total: {{ $cart->precio * $cart->cantidad }} S.</p>
                        </div>
                        
                        <div class="col-lg-2 col-md-2 col-sm-2 pm-cart-info-column">
                            <a data-href="{{ route('eliminar_del_carrito',$cart->slug) }}" class="pm-square-btn pm-cart-remove"><i class="fa fa-remove"></i></a>
                        </div>
                        <hr>
                    @endforeach
                </div><!-- /.row -->
                
            </div><!-- /.pm-cart-info-container -->
            
        </div>
    </div>

</div>
<!-- PANEL 1 end -->
