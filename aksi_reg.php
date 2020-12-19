<?php
include "lib/koneksi.php";
include "lib/config.php";

$firts = $_POST['firts'];
$last = $_POST['last'];
$lokasi = $_POST['lokasi'];
$alamat = $_POST['alamat'];
$nohp = $_POST['notelp'];
$email = $_POST['email'];
$username =$_POST['username'];
$pass = $_POST['pass'];

$daftar = mysqli_query($koneksi,"INSERT INTO tbl_user (firtsname,lastname,id_biaya,email,alamat,notelp,username,password) values ('$firts','$last','$lokasi','$email','$alamat','$nohp','username','$pass')") or die(mysqli_error($koneksi));

if ($daftar) {
    echo "<script> alert('Registrasi berhasil masuk'); window.location='index.php';</script>";
    # code...
}else {
    echo "<script> alert('Registrasi berhasil masuk'); window.location='register.php';</script>";
    # code...
}
?>