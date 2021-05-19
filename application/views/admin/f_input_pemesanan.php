<form role="form">
              <div class="box-body">

                <h4>ID Pemesanan : </h4>

                <h4>Nomer PO : </h4>

                <h4>Data Barang</h4>
                <?php 
                echo form_open('Admin/Pemesana/insert');
                  foreach ($data as $dt) {
                ?>  

                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" value="<?= $dt['kode_barang'] ?>" disabled>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" name="nama_barang" class="form-control" id="exampleInputPassword1" value="<?=  $dt['nama_barang'] ?>" disabled>
                </div>                

              <div class="form-group">
                  <label for="exampleInputPassword1">tanggal Pesan</label>
                  <input type="text" name="tanggal_pemesanan" class="form-control" id="exampleInputPassword1" value="<?=  $waktu ?>" disabled>
                </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Penerima</label>
                  <input type="text" name="penerima" class="form-control" id="exampleInputPassword1" placeholder="Penerima" required>
                </div>
              <?php } ?>
               <div class="form-group">
                <label>Kode Supplier</label>
                <select class="form-control kd_barang" style="width: 100%;">
                  <option value="kode_supplier" >Pilih Kode Supplier</option>                  
                  <?php 
                    foreach ($supplier as $sup) {
                    ?>
                      <option value="<?= $sup['kode_supplier'] ?>"><?= $sup['kode_supplier'] ?></option>                  
                    <?php
                    }
                   ?>
                </select>
              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">qty</label>
                  <input type="text" name="qty" class="form-control" id="exampleInputPassword1" placeholder="Quanity" required>
                </div>
                <input type="hidden" name="status_pemesanan" value="0">

                <div class="form-group">
                  <input type="submit" class="btn btn-info btn-md" >
                </div>
                <?php
                  echo form_close();
                ?>