<?php
include "../../lib/koneksi.php";
include "../../lib/config.php";

$idProduk= $_POST['id_pro'];
$idKategori = $_POST['idkat'];
$idstyle	=$_POST['style'];
$namaProduk = $_POST['namapro'];
$harga		=$_POST['harga'];
$stok		=$_POST	['stok'];
$warna 		=$_POST['warna'];
$deskripsi	=$_POST	['deskripsi'];


$namaGambar = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "../../upload/" . $namaGambar;

 $queryEdit = mysqli_query($koneksi, "UPDATE tbl_produk SET id_kat=$idKategori,id_style=$idstyle,nm_produk='$namaProduk',harga='$harga',stok='$stok',warna='$warna',deskripsi='$deskripsi',gambar='$namaGambar'WHERE id_produk='$idProduk'") or die(mysqli_error($koneksi));


    if ($queryEdit) {
        echo "<script>alert('Data Produk Berhasil Diubah');window.location='list_produk.php';</script>";
    } else {
       echo "<script>alert('Data Produk Gagal Diubah');</script>";
    }
?>      