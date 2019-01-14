<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DessertKuAja | <?php echo $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url("assets/dist/css/AdminLTE.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url("assets/dist/css/skins/_all-skins.min.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url("assets/plugins/iCheck/flat/blue.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?php echo base_url("assets/plugins/morris/morris.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url("assets/plugins/datepicker/datepicker3.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url("assets/plugins/daterangepicker/daterangepicker.css"); ?>" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.css"); ?>">
        <script src="<?php echo base_url("assets/plugins/chart/jquery.2.0.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/chart/rapa.js"); ?>"></script>
<script src="<?php echo base_url("assets/plugins/chart/morris.js"); ?>"></script>
<link href="<?php echo base_url("assets/plugins/chart/morris.css"); ?>"  rel="stylesheet" type="text/css" />
    

        <link href="<?php echo base_url("assets/DataTable/jquery.dataTables.css"); ?>" rel="stylesheet" /> 
        <style type="text/css" class="init"></style>
        <script src="<?php echo base_url("assets/DataTable/jquery.js"); ?>"></script>
        <script src="<?php echo base_url("assets/DataTable/jquery.dataTables.js"); ?>"></script>
        <script src="<?php echo base_url("assets/DataTable/shCore.js"); ?>"></script>
        <script src="<?php echo base_url("assets/DataTable/demo.js"); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/daterangepicker/daterangepicker.css"); ?>">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/iCheck/all.css"); ?>">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/colorpicker/bootstrap-colorpicker.min.css"); ?>">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="<?php echo base_url("assets/plugins/timepicker/bootstrap-timepicker.min.css"); ?>">
       <script type="text/javascript">
          $(function () {
        
        $('#mydata').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
       </script>
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D</b>KA</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Dessert</b>KuAja</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->.
         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>
  