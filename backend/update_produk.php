<?php

require 'koneksi_database.php';
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];
$minimal_stok = $_POST['minimal_stok'];
$deskripsi = $_POST['deskripsi'];
$foto = $_POST['foto'];
$kategori = $_POST['kategori'];

mysqli_query($conn, "UPDATE produk SET kode='$kode', nama='$nama', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok', min_stok='$minimal_stok', deskripsi='$deskripsi', foto='$foto', kategori='$kategori'  WHERE id='$id'");

header("location:produk.php?pesan=update");
?>