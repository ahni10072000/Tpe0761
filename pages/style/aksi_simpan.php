<?php 
include "../../lib/config.php";
include "../../lib/koneksi.php";

// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
$namaStyle= $_POST['namastyle'];

// query untuk menyimapn tabel ke tabel tbl_kategori
$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_style (nama_style) VALUES ('$namaStyle')");

// jike query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
    echo "<script> alert('Data Style Berhasil Masuk'); window.location='list_style.php';</script>";
} else {
    echo "<script> alert('Data Style Gagal Dimasukkan'); window.location='form_tambah.php';</script>";
}
?>