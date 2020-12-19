<?php
include "../../header.php";
?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Tambah Biaya Kirim</h4>
                  <div class="card-header-action">
                    <a href="list_biaya.php" class="btn btn-danger">Kembali ke Daftar Biaya Kirim <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                      <div class="card-body">
                    <form action="aksi_simpan.php" method="POST">
                    <div class="form-group" >
                      <label>Lokasi</label>
                      <input type="text" class="form-control" id="lokasi" name="lokasi">
                      <label>Biaya</label>
                      <input type="text" class="form-control" id="biaya" name="biaya">
                    </div>
  
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
      
        </section>
      </div>

<?php
include "../../footer.php";
?>