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
                  <h4>Edit Kategori</h4>
                  <div class="card-header-action">
                    <a href="list_kategori.php" class="btn btn-danger">Kembali ke Daftar Kategori <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/config.php";
                include "../../lib/koneksi.php";
                $idKategori = $_GET['id']; // id seseuai di form edit button edit
             $QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbk_kategori WHERE id_kat = '$idKategori'");
                $row = mysqli_fetch_array($QueryEdit);

                $idKategori = $row['id_kat'];
                $namaKategori=$row['nama_kat'];
                ?>
                      <div class="card-body">
                    <form action="aksi_edit.php" method="POST">
                     <input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>"> 
                    <div class="form-group" >
                      <label>Nama Kategori</label>
                      <input type="text" class="form-control" id="namakategori" name="namaKategori" value="<?php echo $namaKategori; ?>">
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