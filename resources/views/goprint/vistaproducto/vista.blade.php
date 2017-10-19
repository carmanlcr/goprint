 <!-- PANEL 1 -->
<div class="container pm-containerPadding-top-90 pm-containerPadding-bottom-60">
    
    <div class="row">
    
        <div class="col-lg-12">
                            
            <div class="row">
                    
                <div class="col-lg-6 col-md-6 col-sm-6 pm-column-spacing">
                    
                    <img src="/img/ordenes/{{ $producto->imagen }}" alt="" style="min-height:200px; max-height:400px; min-width:200px; max-width:490p;">
            
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <p class="pm-woocom-item-title">{{ $producto->titulo }}</p>
                    
                    <p class="pm-woocom-item-price">{{ $producto->precio }} S.</p>
                    
                    <div class="pm-woocom-item-short-description">
                    	@if($producto->descripcion == null)
                        	<p>No hay descripción del producto</p>
                        @else
							<p>{{ $producto->descripcion }}</p>
                        @endif
                    </div>
                    {{ Form::open(['route'=>array('carrito_agregar',$producto->slug)]) }}
                        <div class="quantity-product-post buttons_added">
                            <input type="number" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" max="{{ $producto->stock }}" step="1" >
                            
                            <div class="pm-item-add-to-cart">
                                <a><button class="pm-woocomm-submit-btn">Agregar a <i class="fa fa-shopping-cart"></i></button></a>
                            </div>
                                                    
                        </div><!-- quantity buttons end -->
                    {{ Form::close() }}
                </div>
            
            </div>
            <!-- /.row -->
        
        </div><!-- /.col-lg-12 -->
        
    </div>

</div>
<!-- PANEL 1 end -->