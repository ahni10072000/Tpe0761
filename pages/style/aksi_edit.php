<?php
include "../../lib/koneksi.php";
include "../../lib/config.php";

$idStyle = $_POST['id_style'];
$namaStyle = $_POST['namastyle'];

$sql="UPDATE tbl_style SET nama_style='$namaStyle' Where id_style='$idStyle'";
$QueryEdit=mysqli_query($koneksi,$sql);

if ($QueryEdit) {
	echo "<script>alert('Data Style Berhasil Diubah');window.location='list_style.php';</script>";
	
}else{
	 echo "<script>alert('Data Style Gagal Diubah');window.location='form_edit.php'</script>";
}
?>      