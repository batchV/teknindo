
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
      <h4>
        <?= $title; ?>
      </h4>
    </section>

    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-10 col-md-push-1 col-md-pull-1">
             <div class="box">
            <div class="box-header">
              <a href="<?= base_url("Admin/Pemesanan/f_tambah") ?>" type="submit"  class="btn btn-info"><i class="fa fa-plus"> Tambah</i>
                </a>
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>                  
                  <th>ID Pemesanan</th>
                  <th>kode barang</th>
                  <th>nomer po</th>
                  <th>Tanggal</th>
                  <th>Penerima</th>
                  <th>SUpplier</th>
                  <th>qty</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  foreach ($data as $d) {
                ?>
                <tr>
                  <td><?= $d['id_pemesanan'] ?></td>
                  <td><?= $d['kode_barang'] ?></td>
                  <td><?= $d['no_po'] ?></td>
                  <td><?= $d['tgl_barang_masuk'] ?></td>
                  <td><?= $d['penerima'] ?></td>
                  <td><?= $d['Kode_suplier'] ?></td>
                  <td><?= $d['qty'] ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  