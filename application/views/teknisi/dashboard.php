
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <b><h5 class="card-title" style="color: grey;">
                  </h5></b>
                </div>
                <br>
              </div>
                <div class="alert alert-success"> 
    <a>
    <span class="fas fa-pushpin"></span>
  </a>
  <h3 class="text-center" style="text-transform: uppercase;">
    <span class="fa fa-check"></span> 
    <strong>Anda TELAH Berhasil LOG IN</strong>
  </h3>
    <h4 class="text-center" style="text-transform: uppercase;">
      <strong>SELAMAT DATANG
      </strong>
    </h4>
    <br>

    <h5 class="text-center" style="text-transform: uppercase;">
      <strong><?= "Nama : " . $this->session->userdata('nama'); ?></strong>
    </h5>
    <h5 class="text-center" style="text-transform: uppercase;">
      <strong><?= "Jabatan : " . $this->session->userdata('jabatan'); ?></strong>
    </h5>

    <h5 class="text-center" style="text-transform: uppercase;">
      <strong><?= "Waktu sekarang " . $waktu; ?>
      </strong>
    </h5>
          </div>
        </div>
      </div>
    </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->