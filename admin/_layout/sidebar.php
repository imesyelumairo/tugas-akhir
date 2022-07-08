<!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/assets/templates/AdminLTE-2.4.17/dist/img/avatar3.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> Destinasi Pariwisata </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        </li>

        <li>
          <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/_peta/index.php">
            <i class="fa fa-map-marker"></i> <span>Peta</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Infrastruktur Pariwisata</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/informasi/list.php"><i class="fa fa-circle-o"></i>Informasi Daerah</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/mangrove/list_mangrove.php"><i class="fa fa-circle-o"></i>Mangrove</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/kuliner/list.php"><i class="fa fa-circle-o"></i>Kuliner/UMKM</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/pasar /list.php"><i class="fa fa-circle-o"></i>Pasar Tradisional</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/penginapan/list.php"><i class="fa fa-circle-o"></i>Penginapan/Hotel</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/supermarket/list.php"><i class="fa fa-circle-o"></i>Supermarket</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/atm/list.php"><i class="fa fa-circle-o"></i>ATM</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/admin/bank/list.php"><i class="fa fa-circle-o"></i>BANK</a></li>          
          
          </ul>
          <li>
          <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/pariwisata/index.php">
            <i class="fa fa-sign-out"class="btn btn-default square-btn-adjust"></i> <span>Logout</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>