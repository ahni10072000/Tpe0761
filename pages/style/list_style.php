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
                  <h4>Management Style</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-primary">Tambah Style <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
               
                    <table class="table table-striped">
                      <tr>
                        <th>Id Style</th>
                        <th>Nama Style</th>
                        <th>Action</th>
                      </tr>
                       <?php
                		 $kueriStyle = mysqli_query($koneksi, "select * from tbl_style");
 				 		          while ($kat=mysqli_fetch_array($kueriStyle)) {
   						 ?>
                      <tr>
                        <td><a href="#"><?php echo $kat['id_style'];?></a></td>
                        <td class="font-weight-600"><?php echo $kat['nama_style'];?></td>
                        <td>
                          <a href="form_edit.php?id=<?php echo $kat['id_style'];?>" class="btn btn-danger">Edit</a>  
                           <a href="aksi_hapus.php?id=<?php echo $kat['id_style'];?>" onClick = "return confirm('anda yakin ingin menghapus data ini')" class="btn btn-warning">Hapus</a>
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
