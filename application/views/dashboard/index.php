<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header1'); ?>
<?php $this->load->view('dashboard/sidemenu_dashboard'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
          <div class="col-xs-12">
           <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">User Gejala </h3>
                  
                </div>
                <div class="box-body">
                  <div id="donut-chart" style="height: 500px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
              </div>
             </div><!-- /.row -->
             
            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $this->load->view('footer1'); ?>