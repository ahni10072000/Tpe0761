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
                  <h4>Tambah Produk</h4>
                  <div class="card-header-action">
                    <a href="list_produk.php" class="btn btn-danger">Kembali ke Daftar Produk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                 <div class="card-body">
                    <form action="aksi_simpan.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label><b>Select Kategori</b></label>
                      <select class="form-control" multiple="" data-height="100%" name="idKategori">
                        <?php 
                        
                        include "../lib/koneksi.php";
                        $kueriKategori = mysqli_query($koneksi,"SELECT * FROM tbk_kategori");
                        while ($kat=mysqli_fetch_array($kueriKategori)) {
                        ?>
                        <option value="<?php echo $kat['id_kat'];?>"><?php echo $kat['nama_kat'];?></option><?php } ?>
                      </select><br>
                      <label><b>Select Style</b></label>
                      <select class="form-control" multiple="" data-height="100%" name="idStyle">
                        <?php 
                        
                        include "../lib/koneksi.php";
                        $kueriKategori = mysqli_query($koneksi,"SELECT * FROM tbl_style");
                        while ($kat=mysqli_fetch_array($kueriKategori)) {
                        ?>
                        <option value="<?php echo $kat['id_style'];?>"><?php echo $kat['nama_style'];?></option><?php } ?>
                      </select>
                    </div>
                    <div class="form-group" >
                      <label><b>Nama Produk</b></label>
                      <input type="text" class="form-control" id="namapro" name="namapro">
                    </div>
                    <div class="form-group">
                      <label><b>File</b></label>
                      <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="form-group" >
                      <label><b>Stok</b></label>
                      <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="form-group" >
                      <label><b>Harga</b></label>
                      <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group" >
                      <label><b>Warna</b></label>
                      <input type="text" class="form-control" id="warna" name="warna">
                    </div>
                  <div class="form-group" >
                      <label><b>Deskripsi</b></label>
                      <input type="text" class="form-control" id="Deskripsi" name="deskripsi">
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