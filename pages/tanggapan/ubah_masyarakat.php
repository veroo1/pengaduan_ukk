<?php
$query = mysqli_query($koneksi, "SELECT * FROM tanggapan WHERE id_tanggapan='".$_GET['id']."'")or die (mysqli_error($koneksi));
$row=mysqli_fetch_array($query);

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH TANGGAPAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH TANGGAPAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/tanggapan/ubah_tanggapan_proses.php">
              <div class="box-body">
              <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $row['id_pengaduan']; ?>">
                  <label>ID Pengaduan</label>
                  <input type="text" name="id_pengaduan" class="form-control" value="<?php echo $row['id_pengaduan']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tgl" class="form-control" value="<?php echo $row['tgl_pengaduan']; ?>" required>
                </div>
                
                <div class="form-group">
                <textarea name="tanggapan" class="form-control" value="<?php echo $row['tanggapan']; ?>" required>
</textarea>
               </div>
                <div class="form-group">
                  <label>ID Petugas</label>
                  <input type="text" name="id_petugas" class="form-control" value="<?php echo $row['id_petugas']; ?>" required>
                </div>
               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
            
            </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->