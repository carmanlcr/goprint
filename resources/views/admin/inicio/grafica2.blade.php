<!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        <!-- Map box -->
        <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              	<div class="pull-right box-tools">
                	<button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
                	<button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
              	</div><!-- /. tools -->

          <!-- solid sales graph -->
          		<div class="box box-solid bg-teal-gradient">
            		<div class="box-header">
              			<i class="fa fa-th"></i>
              			<h3 class="box-title">Mayor venta</h3>
              			<div class="box-tools pull-right">
                			<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                			<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              			</div>
            		</div>
            		<div class="box-body border-radius-none">
              			<div class="chart" id="line-chart" style="height: 250px;"></div>
            		</div><!-- /.box-body -->
            		<div class="box-footer no-border">
              			<div class="row">
                			<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  				<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  				<div class="knob-label">Mail-Orders</div>
                			</div><!-- ./col -->
                			<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  				<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  				<div class="knob-label">Online</div>
               				</div><!-- ./col -->
                			<div class="col-xs-4 text-center">
                  				<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                  				<div class="knob-label">In-Store</div>
                			</div><!-- ./col -->
              			</div><!-- /.row -->
            		</div><!-- /.box-footer -->
          		</div><!-- /.box -->
        	</section><!-- right col -->
      	</div><!-- /.row (main row) -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->