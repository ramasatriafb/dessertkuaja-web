<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header'); ?>
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html">Welcome , <b>ADMIN</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <span class="text-danger"><?php echo validation_errors(); ?></span>
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo base_url('/index.php/auth/login')?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" id="username" placeholder="Email" required="">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

       <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div> /.social-auth-links -->

      
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url("/assets/adminlte/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url("/assets/adminlte/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("/assets/adminlte/plugins/iCheck/icheck.min.js"); ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>