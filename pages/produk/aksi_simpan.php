<?php 
include "../../lib/config.php";
include "../../lib/koneksi.php";

$namaGambar = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../../upload/" . $namaGambar;
// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
$idKategori = $_POST['idKategori'];
$idStyle = $_POST['idStyle'];
$namaProduk= $_POST['namapro'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$warna = $_POST['warna'];
$deskripsi = $_POST['deskripsi'];


// query untuk menyimapn tabel ke tabel tbl_kategori
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
                        if($ukuran_file <= 3000000){
                             if (move_uploaded_file($tmp_file,$path)) {
                                $querySimpan = mysqli_query($koneksi,"INSERT INTO tbl_produk(id_kat,id_style,nm_produk,gambar,stok,harga,warna,deskripsi) VALUES ('$idKategori','$idStyle','$namaProduk','$namaGambar','$stok','$harga','$warna','$deskripsi')");
                                if($querySimpan){
                            echo "<script> alert('Data Produk Berhasil Masuk'); window.location = 'list_produk.php';
                            </script>";                             
                                } else {
                                    echo "
                                    <script>
                                    alert('Data Produk Gagal Masuk'); window.location ='form_tambah.php';
                                    </script>";
                                }
                        } else {
                            echo "<script> alert('Data Gambar Produk Gagal Dimasukkan'); window.location = 'form_tambah.php';
                            </script>";
                        }
                    } else {
                        echo "<script> 
                        alert('Data Gambar Produk Gagal Dimasukkan Karena Ukuran Melebihi 1 MB'); window.location = 'form_tambah.php';
                        </script>";
                    }
                } else {
                    echo "<script> alert('Data Gambar Produk Gagal Dimasukkan Karena Tidak Berektensi JPG/JPEG/PNG'); window.location = 'form_tambah.php;
                    </script>";
                }

?>