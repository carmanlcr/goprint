<!-- PANEL 2 -->
<div class="pm-column-container pm-parallax-panel" style="background-color:#205663;" data-stellar-background-ratio="0.5">
    <div class="container pm-containerPadding80">
        <div class="row"> 
            <div class="col-lg-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#desc" role="tab" data-toggle="tab">Descripción</a></li>
                </ul>
                <!-- Nav tabs end -->
                <!-- Tabs -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="desc">
                        @if($producto->descripcion == null)
                        	<p>No hay descripción del producto</p>
                        @else
							<p>{{ $producto->descripcion }}</p>
                        @endif 
                    </div>
                </div>
                <!-- Tabs end -->
            </div><!-- /.col-lg-12 --> 
        </div>
    </div>
</div>
<!-- PANEL 2 end -->