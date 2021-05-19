
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    <br>

    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-10 col-md-push-1 col-md-pull-1">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Master</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            		<form role="form">
              <div class="box-body">
			<?php  echo form_open('Admin/Pemesana/insert');?>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" placeholder="Kode">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" name="nama_barang" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                </div>                

              <div class="form-group">
                  <label for="exampleInputPassword1">Referensi</label>
                  <input type="text" name="tanggal_pemesanan" class="form-control" id="exampleInputPassword1" placeholder="Referensi">
                </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Brand</label>
                  <input type="text" name="penerima" class="form-control" id="exampleInputPassword1" placeholder="Brand" required>
                </div>
              
                </select>

              <div class="form-group">
                  <label for="exampleInputPassword1">Satuan</label>
                  <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Satuan" required>
                </div>
                <input type="hidden" name="status_pemesanan" value="0">

                <div class="form-group">
                  <label for="exampleInputPassword1">Lokasi</label>
                  <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Lokasi" required>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-info btn-md" >
                </div>

                <?php
                  echo form_close();
                ?>

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
  <script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
    $(document).ready(function() {
        $(".kd_barang").change(function() {
          $.ajax({
            url: BASE_URL+'Admin/Pemesanan/get_form',
            type: 'POST',
            dateType: 'json',
            data: {
              "kode_barang": $(this).val()
            },
            success: function(data){
                $('.form_input').html(data);
            }
          });
      });    
    });

  </script>


