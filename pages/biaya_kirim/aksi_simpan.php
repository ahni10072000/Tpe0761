<?php 
include "../../lib/config.php";
include "../../lib/koneksi.php";

// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
$biaya= $_POST['biaya'];
$lokasi= $_POST['lokasi'];

// query untuk menyimapn tabel ke tabel tbl_kategori
$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_biaya (biaya,lokasi) VALUES ('$biaya','$lokasi')");

// jike query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
    echo "<script> alert('Data Biaya Kirim Berhasil Masuk'); window.location='list_biaya.php';</script>";
} else {
    echo "<script> alert('Data Biaya Kirim Gagal Dimasukkan'); window.location='form_tambah.php';</script>";
}
?>