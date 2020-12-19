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
                  <h4>Detail Produk</h4>
                  <div class="card-header-action">
                    <a href="list_produk.php" class="btn btn-danger">Kembali ke Daftar Produk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                 <?php
                  $ql = mysqli_query($koneksi, "SELECT * FROM tbl_produk INNER JOIN tbk_kategori ON tbl_produk.id_kat=tbk_kategori.id_kat INNER JOIN tbl_style ON tbl_produk.id_style=tbl_style.id_style");
                          $r = mysqli_fetch_array($ql);  
                    ?>
                    <div class="card-body">
                    <form action="aksi_simpan.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                     <label><b>kategori</b></label>
                      <input type="text" class="form-control" id="namapro" value="<?php echo $r['nama_kat'];?>" disabled>
                    </div>
                    <div class="form-group">
                     <label><b>style</b></label>
                      <input type="text" class="form-control" id="namapro" value="<?php echo $r['nama_style'];?>" disabled >
                    </div>
                    <div class="form-group" >
                      <label><b>Nama Produk</b></label>
                      <input type="text" class="form-control" id="namapro" value="<?php echo $r['nm_produk'];?>" disabled>
                    </div>
                    <div class="form-group">
                      <label><b>File</b></label><br>
                      <img src="../../upload/<?php echo $r['gambar'];?>" id ="gambar"alt="" height="80" width="120">
                    </div>
                    <div class="form-group" >
                      <label><b>Stok</b></label>
                      <input type="text" class="form-control" id="stok" value="<?php echo $r['stok'];?>" disabled>
                    </div>
                    <div class="form-group" >
                      <label><b>Harga</b></label>
                      <input type="text" class="form-control" id="harga" value="<?php echo $r['harga'];?>" disabled>
                    <div class="form-group" >
                      <label><b>Warna</b></label>
                      <input type="text" class="form-control" id="warna" value="<?php echo $r['warna'];?>" disabled>
                    </div>
                  <div class="form-group" >
                      <label><b>Deskripsi</b></label>
                      <input type="text" class="form-control" id="Deskripsi" value="<?php echo $r['deskripsi'];?>" disabled>
                    </div>
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