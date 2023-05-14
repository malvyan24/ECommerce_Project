<?php

require 'koneksi_database.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$logo = $_POST['logo'];

mysqli_query($conn, "UPDATE kategori_produk SET nama='$nama', logo='$logo' WHERE id='$id'");

header("location:kategori_produk.php?pesan=update");
?>