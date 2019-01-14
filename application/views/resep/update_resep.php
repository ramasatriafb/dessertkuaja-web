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
              <?php foreach ($resep as $data) {           ?>
                <?php echo form_open_multipart('resep/edit/'.$data->resep_id);  ?>
              
                    <div class="form-group">
                    <label>Nama Resep</label>
                  <input name="nama_resep" class="form-control" type="text" value="<?php echo $data->nama_resep; ?>"  required />
                    </div>
                    <div class="form-group">
                      <label>Gambar</label><input class="form-control" name="gambar" type="file">
                      <span> File maksimal 2 MB dengan format jpg/png/jpeg/pdf</span>
                    </div>
                    <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" type="text" ><?php echo $data->keterangan; ?>
                    </textarea>
                    </div>
                    <div class="form-group">
                    <label>Bahan</label>
                    <textarea name="bahan" class="form-control" type="text"  > <?php echo $data->bahan; ?>
                    </textarea>
                    </div>
                    <div class="form-group">
                    <label>Tata Cara</label>
                    <textarea name="tata_cara" class="form-control" type="text"><?php echo $data->tata_cara; ?>
                    </textarea>
                    </div>
                    <div class="box-footer">
                    <input type="submit" name="submit" value="Simpan" class="btn btn-primary"> 
                  </div>
                </form>
                  </div><!-- /.form group -->
                  <?php }?> 
                  
            </div><!-- /.col -->
          
                </div><!-- /.box-header -->
                </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
       
</div><!-- /.content-wrapper -->
</body>

<?php $this->load->view('footer1'); ?>