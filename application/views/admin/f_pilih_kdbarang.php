
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
        User Profile
      </h4>
    </section>

    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-10 col-md-push-1 col-md-pull-1">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Pilih Kode Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="form-group">
                <label>Kode Barang</label>
                <select class="form-control kd_barang" style="width: 100%;">
                  <option value="" >Pilih Kode Barang</option>                  
                  <?php 
                    foreach ($kode_barang as $kd) {
                    ?>
                      <option value="<?= $kd['kode_barang'] ?>"><?= $kd['kode_barang'] ?></option>                  
                    <?php
                    }
                   ?>
                </select>
              </div>

              <br>
              <div class="form_input">
                
              </div>
  
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