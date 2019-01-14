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
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Diabet</th>
                        <th>Asam Urat</th>
                        <th>Gula Darah</th>
                        <th>LDL</th>
                        <th>HDL</th>
                        <th>Trigliserida</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($userdata)){ 
                      foreach($userdata as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->username;?> </td>
                    <td> <?php echo $data->nama ?> </td>
                    <td> <?php echo $data->jenis_kelamin;?> </td>
                    <td> <?php echo $data->tgl_lahir ?> </td>
                    <td> <?php echo $data->diabet;?> </td>
                    <td> <?php echo $data->asam_urat ?> </td>
                    <td> <?php echo $data->gula_darah;?> </td>
                    <td> <?php echo $data->hdl ?> </td>
                    <td> <?php echo $data->ldl ?> </td>
                    <td> <?php echo $data->trigliserida ?> </td>
                   
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
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Diabet</th>
                        <th>Asam Urat</th>
                        <th>Gula Darah</th>
                        <th>LDL</th>
                        <th>HDL</th>
                        <th>Trigliserida</th>
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