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
                  <h4>Edit Biaya kirim</h4>
                  <div class="card-header-action">
                    <a href="list_biaya.php" class="btn btn-danger">Kembali ke Daftar Biaya Kirim <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/config.php";
                include "../../lib/koneksi.php";
                $idBiaya = $_GET['id']; // id seseuai di form edit button edit untuk diambil id nya
                $QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_biaya WHERE id_biaya = '$idBiaya'");
                $row = mysqli_fetch_array($QueryEdit);

                $idBiaya = $row['id_biaya'];
                $biaya=$row['biaya'];
                $lokasi=$row['lokasi'];
                ?>
                    <div class="card-body">
                    <form action="aksi_edit.php" method="POST">
                     <input type="hidden" name="idBiaya" value="<?php echo $idBiaya; ?>"> 
                    <div class="form-group" >
                      <label>Lokasi</label>
                      <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $lokasi; ?>">
                      <label>Biaya</label>
                      <input type="text" class="form-control" id="biaya" name="biaya" value="<?php echo $biaya; ?>">
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