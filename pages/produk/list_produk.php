<?php
include "../../header.php";
?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          
       
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Management Produk</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-primary">Tambah Produk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
               
                    <table class="table table-striped">
                      <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Style</th>
                        <th>Nama</th>
                        <th>gambar</th>
                        <th>Action</th>
                      </tr>
                       <?php
                		 $kueriProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk INNER JOIN tbk_kategori ON tbl_produk.id_kat=tbk_kategori.id_kat INNER JOIN tbl_style ON tbl_produk.id_style=tbl_style.id_style");
 				 		          while ($pro=mysqli_fetch_array($kueriProduk)) {
   						        ?>
                      <tr>
                        <td><a href="#"><?php echo $pro['id_produk'];?></a></td>
                        <td class="font-weight-600"><?php echo $pro['id_kat'];?></td>
                        <td class="font-weight-600"><?php echo $pro['id_style'];?></td>
                        <td class="font-weight-600"><?php echo $pro['nm_produk'];?></td>
                         <td>
                              <img src="<?php echo $base_url;?>upload/<?php echo $pro['gambar'];?>" alt="" height="80" width="120">
                            </td>
                         
                        <td>
                          <a href="form_edit.php?id=<?php echo $pro['id_produk'];?>" class="btn btn-warning">Edit</a>  
                           <a href="aksi_hapus.php?id=<?php echo $pro['id_produk'];?>" onClick = "return confirm('anda yakin ingin menghapus data ini')" class="btn btn-danger">Hapus</a>
                           <a href="form_detail.php?id=<?php echo $pro['id_produk'];?>" class="btn btn-secondary">Detail</a> 
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
