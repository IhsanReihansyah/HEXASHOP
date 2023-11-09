<?php 
include '../koneksi.php';

// $result1 = mysqli_query($conn, "DELETE FROM detail_peminjaman WHERE isbn = '$_GET[isbn]'");
$result2 = mysqli_query($conn, "DELETE FROM produk WHERE id = '$_GET[id]'");

header("Location:index.php");

?>