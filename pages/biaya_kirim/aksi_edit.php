<?php
include "../../lib/koneksi.php";
include "../../lib/config.php";

$idBiaya = $_POST['idBiaya'];
$lokasi = $_POST['lokasi'];
$biaya = $_POST['biaya'];

$sql="UPDATE tbl_biaya SET lokasi='$lokasi',biaya='$biaya' Where id_biaya='$idBiaya'";
$QueryEdit=mysqli_query($koneksi,$sql);

if ($QueryEdit) {
  echo "<script>alert('Data Biaya Kirim Berhasil Diubah');window.location='list_biaya.php';</script>";
  
}else{
   echo "<script>alert('Data Biaya Kirim Gagal Diubah');window.location='form_edit.php'</script>";
}
?>      