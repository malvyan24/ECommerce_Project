<?php 
require './koneksi_database.php';
$id = $_GET['id'];

// query untuk hapus data
mysqli_query($conn, "DELETE FROM kategori_produk WHERE id='$id'");

header("location:kategori_produk.php?pesan=hapus");
?>