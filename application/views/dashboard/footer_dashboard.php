<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>" type="text/javascript">></script>
    
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url("assets/plugins/sparkline/jquery.sparkline.min.js");?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url("assets/plugins/knob/jquery.knob.js");?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url("assets/plugins/daterangepicker/daterangepicker.js");?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url("assets/plugins/datepicker/bootstrap-datepicker.js");?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url("assets/plugins/iCheck/icheck.min.js");?>" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js");?>" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url("assets/dist/js/app.min.js");?>" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url("assets/dist/js/demo.js");?>" type="text/javascript"></script>

        <script src="<?php echo base_url("assets/plugins/jQuery/jQuery-2.1.4.min.js");?>"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url("assets/dist/js/app.min.js");?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url("assets/plugins/sparkline/jquery.sparkline.min.js");?>"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");?>"></script>
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");?>"></script>
        <script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js");?>"></script>
    
        <script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.min.js");?>"></script>
   
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js");?>"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url("assets/plugins/chartjs/Chart.min.js");?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php //echo base_url("assets/dist/js/pages/dashboard2.js");?>"></script> -->
        <!-- AdminLTE for demo purposes -->
        <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url("assets/dist/js/demo.js");?>"></script>
    <!-- page script -->
<!-- jQuery 2.1.3 -->
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>" type="text/javascript">></script>
    
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url("assets/plugins/sparkline/jquery.sparkline.min.js");?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url("assets/plugins/knob/jquery.knob.js");?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url("assets/plugins/daterangepicker/daterangepicker.js");?>" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url("assets/plugins/datepicker/bootstrap-datepicker.js");?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url("assets/plugins/iCheck/icheck.min.js");?>" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js");?>" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url("assets/dist/js/app.min.js");?>" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url("assets/dist/js/demo.js");?>" type="text/javascript"></script>

        <script src="<?php echo base_url("assets/plugins/jQuery/jQuery-2.1.4.min.js");?>"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url("assets/dist/js/app.min.js");?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url("assets/plugins/sparkline/jquery.sparkline.min.js");?>"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");?>"></script>
        <script src="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");?>"></script>
        <script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js");?>"></script>
    
        <script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.min.js");?>"></script>
   
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js");?>"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="<?php echo base_url("assets/plugins/chartjs/Chart.min.js");?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="<?php //echo base_url("assets/dist/js/pages/dashboard2.js");?>"></script> -->
        <!-- AdminLTE for demo purposes -->
        <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url("assets/plugins/morris/morris.min.js");?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url("assets/plugins/fastclick/fastclick.min.js");?>"></script>
    <!-- AdminLTE App -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url("assets/dist/js/demo.js");?>"></script>
    <!-- page script -->
    <script>
      $(function () {
        "use strict";

        //BAR CHART
        // var bar = new Morris.Bar({
        //   element: 'bar-chart',
        //   resize: true,
        //   data: [
        //     {y: 'Wajib', a: <?php foreach ($count_wajib as $co) echo $co?>},
        //     {y: 'Organisasi Mahasiswa', a: <?php foreach ($count_ormawa as $co) echo $co?>},
        //     {y: 'UKM', a: <?php foreach ($count_ukm as $co) echo $co?>},
        //     {y: 'Panitia Acara', a: <?php foreach ($count_panitia as $co) echo $co?>},
        //     {y: 'PKM', a: 5},
        //     {y: 'Mawapres', a: 7},
        //     {y: 'Perlombaan', a: 10},
        //     {y: 'Pelatihan & Seminar', a: 10},
        //     {y: 'Wirausaha', a: 1}
        //   ],
        //   barColors: ['#00a65a'],
        //   xkey: 'y',
        //   ykeys: ['a'],
        //   labels: ['Mahasiswa'],
        //   hideHover: 'auto'
        // });
        var donut = new Morris.Donut({
          element: 'donut-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a","#ffff33","#99ff00","#660000","990099","#9900cc","#99ffff"],
          data: [
            {label: "Kolesterol", value: <?php foreach ($count_kolesterol as $co) echo $co?>} ,
            {label: "Hipertensi", value: <?php foreach ($count_hipertensi as $co) echo $co?>},
            {label: "Asam Urat", value: <?php foreach ($count_asamUrat as $co) echo $co?>},
            {label: "Normal", value: <?php foreach ($count_normal as $co) echo $co?>}
          ],
          hideHover: 'auto'
        });
      });
    </script>
    
    </body>
</html>
