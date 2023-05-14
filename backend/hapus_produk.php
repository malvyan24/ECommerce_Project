<?php 
require './koneksi_database.php';
$id = $_GET['id'];

// query untuk hapus data
mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

header("location:produk.php?pesan=hapus");
?>