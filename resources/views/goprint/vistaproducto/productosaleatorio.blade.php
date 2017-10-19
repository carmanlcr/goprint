<!-- Related products -->
<div class="container pm-containerPadding-top-100 pm-containerPadding-bottom-80">
	<div class="row">
    	<div class="col-lg-12 pm-column-spacing">
        	<h4 class="pm-primary">Productos Relacionados</h4>
        </div>
    
    </div>
    
    <div class="row">
        @foreach($productos_aleatorios as $producto)
    
        	<div class="col-lg-4 col-md-4 col-sm-6 pm-column-spacing">
            	
                <!-- Product 1 -->
                <a href="product-post.html" class="pm-store-post-title">{{ $producto->nombre }}</a>
                
                <div class="pm-store-post-container">
                	
                    <div class="pm-store-post-info-container">
                    
                    	<div class="pm-store-post-info-overlay">
                        	<p class="pm-store-post-quantity">{{ $producto->stock }} en almacen</p>
                            @if($producto->descripcion == null)
                                <p class="pm-store-post-excerpt">Sin descripción <a href="#">[...]</a></p>
                            @else
                                <p class="pm-store-post-excerpt">{{ $producto->descripcion }} <a href="#">[...]</a></p>
                            @endif
                            <a href="{{ route('solicitudproducto',$producto->slug) }}" class="pm-store-post-details-btn fa fa-bars"></a>
                            <a href="#" class="pm-store-post-details-btn pm-close-btn fa fa-close"></a>
                        </div>
                    
                    	<div class="pm-store-post-img">
                   	    	<img src="/img/ordenes/{{ $producto->imagen }}" class="img-responsive" alt="{{ $producto->nombre }}">
                        </div>
                        
                        <div class="pm-store-post-tags">
                        	<a href="#" class="fa fa-chevron-up pm-store-post-expander"></a>
                            
                        </div>
                    
                  </div>
                    
                  <a href="#" class="pm-add-to-cart-btn pm-rounded-btn small">Agregar al carrito</a>
                    
                </div>
                
                <p class="pm-store-post-price">{{ $producto->precio }} S.</p>
                <!-- Product 1 end -->
                
            </div>
        @endforeach
    </div><!-- /.row -->
</div>
<!-- Related products end -->

<!-- PANEL 3 end -->