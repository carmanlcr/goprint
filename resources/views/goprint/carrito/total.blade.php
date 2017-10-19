@if($carrito)
<!-- PANEL 2 -->
<div class="container pm-containerPadding-bottom-110">
	<div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
        	
            <div class="pm-cart-totals">
            	
                <div class="pm-cart-totals-title">
                	<h3>TOTAL</h3>
                </div>
                
                <div class="row">
                
                	<div class="col-lg-4 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p class="pm-cart-totals-label">Subtotal carrito</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p>{{ $total }} S.</p>
                        </div>
                    </div>
                
                </div><!-- /.row -->
                
                <div class="row">
                
                	<div class="col-lg-4 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p class="pm-cart-totals-label">Envio</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p>GRATIS</p>
                        </div>
                    </div>
                
                </div><!-- /.row -->
                
                <div class="row">
                
                	<div class="col-lg-4 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p class="pm-cart-totals-label">Total de la orden</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-8 col-md-6 col-sm-6">
                    	<div class="pm-cart-totals-column">
                        	<p>{{ $total }} S.</p>
                        </div>
                    </div>
                
                </div><!-- /.row -->
                
                <div class="pm-cart-totals-buttons">
                	<a href="{{ route('index') }}#product" class="pm-woocomm-submit-btn">Actualizar carrito</a>
                    <a href="{{ route('checkout') }}" class="pm-woocomm-submit-btn" style="margin-bottom:0px;">Pagar</a>
                </div>
                
            </div><!-- /.pm-cart-totals -->
            
        </div><!-- /.col-lg-8 -->
        
    </div>
</div>
<!-- PANEL 2 end -->
@endif