<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('header1'); ?>
<?php $this->load->view('dashboard/sidemenu_dashboard'); ?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <br><br><br>
        </section>

        <!-- Main content -->
        <section class="content">
     
          <div class="container">
              <!-- Page Heading -->
              <div class="box">
                <div class="box-body">
                      <h1 class="page-header"><?php echo $title;?>
                          <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalAdd"><span class="fa fa-plus"></span> Tambah User</a></div>
                      </h1>
                  <div id="reload">
                  <table class="table table-striped" id="mydata">
                      <thead>
                          <tr role="row">
                              <th>Nama Depan</th>
                              <th>Nama Belakang</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Telepon</th>
                              <th>Level User</th>
                              <th>Status</th>
                              <th>Avatar</th>
                              <th>Edit</th>
                              <th>Auth</th>
                          </tr>
                      </thead>
                       <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($users_query)){ 
                      foreach($users_query as $data){ 
                      
                      $no++;
                      if ($data->active == 1){
                                  $active = '<span class="pull-center badge bg-green">Active</span>';
                                } else{
                                  $active = '<span class="pull-center badge bg-red">Deactiveted</span>';
                                }
                      if ($data->avatar == null){
                                  $avatar =  base_url("assets/images/Profil.jpg");
                                } else{
                                  $avatar = 'Ada';
                                }
                      echo
                    "<tr>
                      <td>".$data->nama_depan."</td>
                      <td>".$data->nama_belakang."</td>
                      <td>".$data->username."</td>
                      <td>".$data->email."</td>
                      <td>".$data->telepon."</td>
                      <td>".$data->username."</td>
                      <td>".$active."</td>
                      <td><img src=".$avatar." style='width:30px;height:30px;' alt=''  class='img-responsive' /></td>
                      <td><button class='btn btn-block btn-warning btn-sm'><i class='fa fa-fw fa-edit'></i>".$data->user_id."</button></td>
                      <td>".$data->username."</td>
                      
                     ";
                      }
                    }
                    ?>
                    </tbody>
                    <tfoot>
                      <tr>
                              <th>Nama Depan</th>
                              <th>Nama Belakang</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Telepon</th>
                              <th>Level User</th>
                              <th>Status</th>
                              <th>Avatar</th>
                              <th>Edit</th>
                              <th>Auth</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
              
                </div><!-- /.box-body -->
              </div>

          </div>
           <!-- MODAL ADD -->
           <script type="text/javascript">
             var check_pass = function() {
      var pass = document.getElementById('password').value;
      if(pass.length < 8){
        document.getElementById('password_error').style.color = 'red';
        document.getElementById('password_error').innerHTML = 'Password Kurang Panjang';
        document.getElementById("btn_submit").disabled = false; 
      }
      else{
        document.getElementById('password_error').style.color = 'green';
        document.getElementById('password_error').innerHTML = 'Password Valid';
      }
    }
    var check = function() {
      if (document.getElementById('password').value ==
      document.getElementById('konfirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Sama';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Tidak Sama';
        document.getElementById("btn_submit").disabled = false; 
      }
    }
    function validate_username() {
     // check if input is bigger than 3
      var username = document.getElementById('username').value;
      if (username.length < 3) {
        document.getElementById('username_error').style.color = 'red';
        document.getElementById('username_error').innerHTML = 'Username Anda Kurang Panjang';
      } else {
        document.getElementById('username_error').style.color = 'green';
        document.getElementById('username_error').innerHTML = 'Username Valid';
        document.getElementById("btn_submit").disabled = false; 
      }
    }
    function validate_telepon() {
      var telepon = document.getElementById('telepon').value;
      if(isNaN(telepon))
      {
        document.getElementById('telepon_error').style.color = 'red';
        document.getElementById('telepon_error').innerHTML = 'Nomor Telepon Tidak Valid';
        document.getElementById("btn_submit").disabled = false; 
      }else{
        document.getElementById('telepon_error').style.color = 'green';
        document.getElementById('telepon_error').innerHTML = 'Nomor Telepon Valid';
      }
    }
</script>
        <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah User</h3>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('users/create_user')?>" method="post">
                <div class="modal-body">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                             <input type="text" class="form-control" name="username" id="username" placeholder="Tuliskan Username" required="" onkeyup='validate_username();' >
                              <span id='username_error'></span>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Depan</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="nama_dpn" id="nama_dpn" placeholder="Tuliskan Nama Depan" required="" >
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Belakang</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="nama_blkg" id="nama_blkg" placeholder="Tuliskan Nama Belakang" required="" >
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Tuliskan Alamat Email" required="">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Perusahaan</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Tuliskan Perusahaan" required="">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Telepon</label>
                        <div class="col-xs-9">
                           <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Tuliskan Nomor Telepon" required="" onkeyup='validate_telepon();'>
                            <span id='telepon_error'></span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Tuliskan Password" required="" onkeyup='check_pass();'>
                        <span id='password_error'></span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Konfirmasi Password</label>
                        <div class="col-xs-9">
                            <input type="password" class="form-control" name="konfirm_password" id="konfirm_password" placeholder="Ulangi Password" required="" onkeyup='check();'>

                        <span id='message'></span>
                        </div>
                    </div>
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_submit" disabled="true">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
        </section>
</div><!-- /.content-wrapper -->
</body>

<?php $this->load->view('footer1'); ?>