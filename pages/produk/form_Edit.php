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
                  <h4>Edit Produk</h4>
                  <div class="card-header-action">
                    <a href="list_produk.php" class="btn btn-danger">Kembali ke Daftar Produk <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                 <?php
                include "../../lib/config.php";
                include "../../lib/koneksi.php";
                $idProduk = $_GET['id']; // id seseuai di form edit button edit
               $QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$idProduk'");
                $row = mysqli_fetch_array($QueryEdit);

                $idProduk = $row['id_produk'];
                $kat= $row['id_kat'];
                $style = $row['id_style'];
                $namaProduk = $row['nm_produk'];
                $harga = $row['harga'];
                $stok = $row['stok'];
                $warna= $row['warna'];
                $gambar = $row['gambar'];
                $Deskripsi = $row['deskripsi'];
                ?>
                      <div class="card-body">
                    <form action="aksi_edit.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="id_pro" value="<?php echo $idProduk; ?>"> 
                    <div class="form-group">
                      <label>Select Kategori</label>
                      <select class="form-control" multiple="" data-height="100%" name="idkat">
                        <?php 
                        
                        include "../lib/koneksi.php";
                        $kueriKategori = mysqli_query($koneksi,"SELECT * FROM tbk_kategori");
                        while ($kat=mysqli_fetch_array($kueriKategori)) {
                        ?>
                        <option value="<?php echo $kat['id_kat'];?>"><?php echo $kat['nama_kat'];?></option><?php } ?>
                      </select><br>
                      <label>Select Style</label>
                      <select class="form-control" multiple="" data-height="100%" name="style">
                        <?php 
                        
                        include "../lib/koneksi.php";
                        $kueriKategori = mysqli_query($koneksi,"SELECT * FROM tbl_style");
                        while ($kat=mysqli_fetch_array($kueriKategori)) {
                        ?>
                        <option value="<?php echo $kat['id_style'];?>"><?php echo $kat['nama_style'];?></option><?php } ?>
                      </select>
                    </div>
                    <div class="form-group" >
                      <label>Nama Produk</label>
                      <input type="text" class="form-control" id="namapro" name="namapro" value="<?= $namaProduk;?>">
                    </div>
                    <div class="form-group">
                      <label>File</label>
                      <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $gambar;?>">
                    </div>
                    <div class="form-group" >
                      <label>Stok</label>
                      <input type="text" class="form-control" id="stok" name="stok" value="<?= $stok;?>">
                    </div>
                    <div class="form-group" >
                      <label>Harga</label>
                      <input type="text" class="form-control" id="harga" name="harga" value="<?=$harga;?>">
                    </div>
                  <div class="form-group" >
                      <label>Warna</label>
                      <input type="text" class="form-control" id="warna" name="warna" value="<?=$warna;?>">
                    </div>
                  <div class="form-group" >
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $Deskripsi?>">
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