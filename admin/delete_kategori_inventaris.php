<?php
    include "koneksi.php";
    $id = $_GET['id_kategori'];
    $ambilData = mysqli_query($con, "DELETE FROM kategori_barang_inventaris WHERE id_kategori='$id'");
    echo "<meta http-equiv='refresh' content='1;url=kategori_inventaris.php'>";
?>