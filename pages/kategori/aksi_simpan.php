<?php 
include "../../lib/config.php";
include "../../lib/koneksi.php";

// untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
$namaKategori= $_POST['namakat'];

// query untuk menyimapn tabel ke tabel tbl_kategori
$querySimpan = mysqli_query($koneksi, "INSERT INTO tbk_kategori (nama_kat) VALUES ('$namaKategori')");

// jike query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
if ($querySimpan) {
    echo "<script> alert('Data Kategori Penyakit Berhasil Masuk'); window.location='list_kategori.php';</script>";
} else {
    echo "<script> alert('Data Kategori Penyakit Gagal Dimasukkan'); window.location='form_tambah.php';</script>";
}
?>