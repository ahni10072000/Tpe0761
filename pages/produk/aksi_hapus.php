<?php

    include "../../lib/config.php";
    include "../../lib/koneksi.php";
    

    $idProduk = $_GET['id'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk = '$idProduk'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = 'list_produk.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = 'list_produk.php';
        </script>";
    }

?>