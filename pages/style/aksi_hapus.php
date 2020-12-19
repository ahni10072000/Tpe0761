<?php
    include "../../lib/config.php";
    include "../../lib/koneksi.php";
    
    $idSty = $_GET['id'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_style WHERE id_style='$idSty'") or die(mysqli_error($koneksi));
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data Style berhasil dihapus');
            window.location = 'list_style.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Style gagal dihapus');
            window.location = 'list_style.php';
        </script>";
    }

?>