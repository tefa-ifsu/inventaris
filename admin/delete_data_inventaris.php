<?php
    include "koneksi.php";
    $id = $_GET['id_barang'];
    $ambilData = mysqli_query($con, "DELETE FROM barang_inventaris WHERE id_barang='$id'");
    echo "<meta http-equiv='refresh' content='1;url=data_inventaris.php'>";
?>
