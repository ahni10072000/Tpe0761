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
                  <h4>Edit Style</h4>
                  <div class="card-header-action">
                    <a href="list_style.php" class="btn btn-danger">Kembali ke Daftar Style <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/config.php";
                include "../../lib/koneksi.php";
                $idStyle = $_GET['id']; // id seseuai di form edit button edit
                $QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_style WHERE id_style = '$idStyle'");
                $row = mysqli_fetch_array($QueryEdit);

                $idStyle = $row['id_style'];
                $namaStyle=$row['nama_style'];
                ?>
                      <div class="card-body">
                    <form action="aksi_edit.php" method="POST">
                     <input type="hidden" name="id_style" value="<?php echo $idStyle; ?>"> 
                    <div class="form-group" >
                      <label>Nama Style</label>
                      <input type="text" class="form-control" id="namastyle" name="namastyle" value="<?php echo $namaStyle; ?>">
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