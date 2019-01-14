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
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Batas Autentikasi</th>
                        <th>Waktu Login</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($user_sessions)){ 
                      foreach($user_sessions as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->username;?> </td>
                    <td> <?php echo $data->nama ?> </td>
                    <td> <?php echo $data->expired_at;?> </td>
                    <td> <?php echo $data->created_at ?> </td>
                   
                </tr>
                     <?php
                    }
                    }
                    ?>
                    <script>
function doconfirm()
{
    job=confirm("Apakah Anda yakin untuk menghapus data ini ?");
    if(job!=true)
    {
        return false;
    }
}
</script>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Batas Autentikasi</th>
                        <th>Waktu Login</th>
                       </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
       
</div><!-- /.content-wrapper -->
</body>

<?php $this->load->view('footer1'); ?>