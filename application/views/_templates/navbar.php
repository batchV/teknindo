<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>CAT Integrate System</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center"><?php echo $this->session->userdata('nama'); ?></li>
       
       <?php

       if ($this->session->userdata('jabatan') == "Admin") {
       ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li>
          <a href="<?= base_url('admin/Master')?>">
            <i class="fa fa-dashboard"></i> <span>Master</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Laporan Mingguan</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Laporan Bulanan</a></li>
          </ul>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Profil</span>
          </a>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Log Out</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
      <?php }?>      

             <?php

       elseif ($this->session->userdata('jabatan') == "Manager") {
       ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li>
          <a href="<?= base_url('admin/Master')?>">
            <i class="fa fa-dashboard"></i> <span>Master</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Laporan Mingguan</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Laporan Bulanan</a></li>
          </ul>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Profil</span>
          </a>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Log Out</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
      <?php }?>    

             <?php

       elseif ($this->session->userdata('jabatan') == "Teknisi") {
       ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li>
          <a href="<?= base_url('admin/Master')?>">
            <i class="fa fa-dashboard"></i> <span>Master</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Barang Masuk</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Barang Keluar</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Laporan Mingguan</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Laporan Bulanan</a></li>
          </ul>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Profil</span>
          </a>
        </li>
         <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Log Out</span>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
      <?php }?>        
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

