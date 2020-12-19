<?php
    include "../../lib/config.php";
    include "../../lib/koneksi.php";
    
    $idKategori = $_GET['id'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbk_kategori WHERE id_kat='$idKategori'") or die(mysqli_error($koneksi));
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data Kategori berhasil dihapus');
            window.location = 'list_kategori.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data Kategori gagal dihapus');
            window.location = 'list_kategori.php';
        </script>";
    }

?>