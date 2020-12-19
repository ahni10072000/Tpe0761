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
                  <h4>Management Biaya Kirim</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-primary">Tambah Biaya Kirim <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
               
                    <table class="table table-striped">
                      <tr>
                        <th>Id Biaya</th>
                        <th>Biaya</th>
                        <th>lokasi</th>
                        <th>Action</th>
                      </tr>
                       <?php
                		 $kueriBiaya = mysqli_query($koneksi, "select * from tbl_biaya");
 				 		          while ($bia=mysqli_fetch_array($kueriBiaya)) {
   						 ?>
                      <tr>
                        <td><a href="#"><?php echo $bia['id_biaya'];?></a></td>
                        <td class="font-weight-600"><?php echo $bia['biaya'];?></td>
                        <td class="font-weight-600"><?php echo $bia['lokasi'];?></td>
                        <td>
                          <a href="form_edit.php?id=<?php echo $bia['id_biaya'];?>" class="btn btn-danger">Edit</a>  
                           <a href="aksi_hapus.php?id=<?php echo $bia['id_biaya'];?>" onClick = "return confirm('anda yakin ingin menghapus data ini')" class="btn btn-warning">Hapus</a>
                        </td>
                      </tr>
                 
                     <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
      
        </section>
      </div>


<?php
include "../../footer.php";
?>
