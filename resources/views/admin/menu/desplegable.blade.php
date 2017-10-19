<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      	@include('admin.menu.desplegable.datousuario')
	    <!-- sidebar menu: : style can be found in sidebar.less -->
	    <ul class="sidebar-menu">
	        <li class="header">Menu de Navegación</li>
	        	@include('admin.menu.desplegable.dashboard')
	        	@include('admin.menu.desplegable.usuarios')
	        	@include('admin.menu.desplegable.productos')
	        	@include('admin.menu.desplegable.ordenes')
	        	@include('admin.menu.desplegable.blog')
	       	</li>
      	</ul>
	</section>
    <!-- /.sidebar -->
</aside>