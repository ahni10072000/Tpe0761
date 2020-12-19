<?php
include "../../lib/koneksi.php";
include "../../lib/config.php";

$idKategori = $_POST['id_kategori'];
$namaKategori = $_POST['namaKategori'];

$sql="UPDATE tbk_kategori SET nama_kat='$namaKategori' Where id_kat='$idKategori'";
$QueryEdit=mysqli_query($koneksi,$sql);

if ($QueryEdit) {
	echo "<script>alert('Data kategori Berhasil Diubah');window.location='list_kategori.php';</script>";
	
}else{
	 echo "<script>alert('Data Kategori Gagal Diubah');window.location='form_edit.php'</script>";
}
?>      