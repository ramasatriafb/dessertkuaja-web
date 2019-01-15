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
                <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Resep Dessert</h3>
                </div><!-- /.box-header -->
              <div class="box-body">
              <?php echo form_open('resep/add_kategori');  ?>
               
              <div class="form-group">
                    <label>Pilih Resep</label>
                     <select name = "resep_id"class="form-control select2" style="width: 100%;">
                     <?php foreach($resepdata as $each)
                      {
                          ?>
                          <option value="<?=$each->id?>"><?=$each->nama_resep?></option>
                          <?php
                      }
                      ?>?>
                    </select>
                  
                    </div>
                    <div class="form-group">
                    <label>Pilih Kategori</label>
                     <select name = "kategori_id"class="form-control select2" style="width: 100%;">
                     <?php foreach($kategori as $each)
                      {
                          ?>
                          <option value="<?=$each->kategori_id?>"><?=$each->kategori?></option>
                          <?php
                      }
                      ?>?>
                    </select>
                  
                    </div>
                    <div class="box-footer">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary"> 
                  </div>
                </form>
                  </div><!-- /.form group -->
                  
            </div><!-- /.col -->
          
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Resep Makanan</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Bahan</th>
                        <th>Tata Cara</th>
                        <!-- <th>Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($resepkategori)){ 
                      foreach($resepkategori as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->nama_resep;?> </td>
                    <td> <?php echo "<img src='".$data->gambar."'style='width:300px'>"; ?> </td>
                    <td> <?php echo $data->keterangan;?> </td>
                    <td> <?php echo $data->bahan ?> </td>
                    <td> <?php echo $data->tatacara;?> </td>
                    <!-- <td>  <a href="detail/<?php echo $data->id; ?>"><i class="fa fa-fw fa-edit"></i> </a> | <a href="index.php/resep/delete/<?php echo $data->id                             ?>"onClick="return doconfirm();">
                <i class=" fa fa-fw fa-remove"></i> </a> </td> -->
                   
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
                        <th>Nama Resep Makanan</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Bahan</th>
                        <th>Tata Cara</th>
                        <!-- <th>Action</th> -->
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