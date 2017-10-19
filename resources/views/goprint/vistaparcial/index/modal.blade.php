<div class="row">     
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Descuento Especial</h3>
          <div class="modal-body">
            <h4></h4>
            <div class="row">
              <div id="inner">    
                <img src="img/logo/imgmodal2.png" class="img-responsive pull-left" width="200" height="300"> 
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <h2>Descuento de</h2>
                  <h3>S/10.00 Soles</h3>
                  <p>para tu primera compra</p>
                  @if(Auth::check() && $cantidad_ordenes == null)
                    <p>ANDA RAPIDO POR TU PRIMERA COMPRAR</p>
                    <div class="clear">
                      <button sytle="text-decoration: none;" class="btn btn-danger"><a href="{{ route('index') }}#product" >Productos</a></button>
                    </div> <!-- fin clear -->
                  @else
                    <p>Registrate y obten tu primera compra</p>
                    <div class="clear">
                      <button sytle="text-decoration: none;" class="btn btn-success"><a href="{{ route('register') }}" >Registrate</a></button>
                    </div>
                  @endif
                </div> <!--Fin del col-lg-6 col-md-6 col-sm-12-->
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              </div><!-- fin inner -->
            </div> <!-- fin row -->
          </div> <!-- fin modal-body -->
        </div> <!-- fin modal-header -->  
      </div><!-- fin modal-content -->
    </div><!-- fin modal-dialog -->
  </div><!-- fin modal fade -->
</div><!-- fin row -->