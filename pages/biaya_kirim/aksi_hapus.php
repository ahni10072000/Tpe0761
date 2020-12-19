<?php
    include "../../lib/config.php";
    include "../../lib/koneksi.php";
    
    $idBiaya = $_GET['id'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_biaya WHERE id_biaya='$idBiaya'") or die(mysqli_error($koneksi));

    if ($QueryHapus) {
        echo "
        <script>
            alert('Data Biaya Kirim berhasil dihapus');
            window.location = 'list_biaya.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Biaya Kirim gagal dihapus');
            window.location = 'list_biaya.php';
        </script>";
    }

?>