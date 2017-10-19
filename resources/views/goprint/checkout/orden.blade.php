<div class="container">
    <div class="row">
    
        <div class="col-lg-12">
        
            <h3 class="pm-woocomm-checkout-titles">Orden</h3>
            
            <div class="pm-order-summary-container">
                
                <ul class="pm-order-summary">
                    @foreach($carrito as $cart)
                        <li>
                            <p class="title">{{ $cart->nombre }}</p>
                            <p class="price">{{ $cart->precio * $cart->cantidad }} S.</p>
                        </li>
                    @endforeach
                    <li>
                        <p class="label">Envio</p>
                        <p class="price">Gratis</p>
                    </li>
                    @if(!$cantidad_ordenes)
                        <li>
                            <p class="label">Descuento</p>
                            <p class="price">-10.00 S.</p>
                        </li>
                    @endif
                    <li>
                        <p class="label">Subtotal Carrito</p>
                        <p class="price">{{ $total }}</p>
                    </li>
                    <li>
                        <p class="label">Total de la orden</p>
                        @if(!$cantidad_ordenes)
                            <p class="price">{{ $total - 10.00 }} S.</p>
                        @else
                            <p class="price">{{ $total }} S.</p>
                        @endif
                    </li>
                </ul>
                                            
            </div>
            
        </div>
    </div>
</div>