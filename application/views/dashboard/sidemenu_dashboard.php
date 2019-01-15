<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div> -->
          <!-- search form -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION
            <a href="<?php echo base_url('/index.php/auth/logout')?>">Logout</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
              
            </li>

            
            <li class="treeview">
              <a href="<?php echo base_url('/index.php/user/index')?>">
                <i class="fa fa-group"></i>
                <span>User</span>
              </a>
            </li>

            <li class="treeview">
            <a href="<?php echo base_url('/index.php/user/user_session')?>">
                <i class="fa fa-group"></i>
                <span>User Active</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('/index.php/resep/index')?>">
                <i class="fa fa-gears"></i>
                <span>Resep Dessert</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo base_url('/index.php/resep/kategori')?>">
                <i class="fa fa-gears"></i>
                <span>Resep Kategori</span>
              </a>
            </li>

        </section>
        <!-- /.sidebar -->
      </aside>
