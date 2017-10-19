<div class="pm-fat-footer pm-parallax-panel" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
        <h6 class="pm-fat-footer-title"><span>Acerca de:</span> GoPrint</h6>
        <div class="pm-fat-footer-title-divider"></div>
        <p>GoPrint es una empresa dedicada a brindarle al público en general de un servicio de la más alta calidad</p>
        <p></p>
        <p></p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
        <h6 class="pm-fat-footer-title"> <span>Contacte con</span> GoPrint</h6>
        <div class="pm-fat-footer-title-divider"></div>
        <ul class="pm-general-icon-list">
          <li>
            <span class="fa fa-mobile-phone pm-general-icon"></span>
            <p>+ 51 976048631</p>
          </li>
          <li>
            <span class="fa fa-inbox pm-general-icon"></span>
            <p><a href="mailto:info@medical-link.com">ventas@goprint.pe</a></p>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12 pm-widget-footer">
        <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer"></div>
      </div>
      @if(Auth::guest())
        <div class="col-lg-4 col-md-4 col-sm-12 pm-widget-footer">
          <ul class="pm-recent-blog-posts"><!-- inicio row -->
            <div id="inner">  
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h5>Descuento especial para tu primera compra</h5>             
                </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <br><br>
                <center><a href="{{ route('register') }}" value="Registrate" name="subscribe" id="mc-embedded-subscribe" class="btn-danger">Registrate</a></center>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    
            </div>
          </div>
          <div class="pm-newsletter-form-container"><!-- Begin MailChimp Signup Form -->
          <!--End mc_embed_signup-->
          </div>
        </div>
      @endif
      
      <ul class="pm-recent-blog-posts">
        <!-- Post -->
        <!-- Post end -->
        <!-- Post -->
        <!-- Post end -->
      </ul>
    </div>
  </div>  
</div>
            
       