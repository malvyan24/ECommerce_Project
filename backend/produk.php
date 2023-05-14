<?php require './koneksi_database.php';
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $minimal_stok = $_POST['minimal_stok'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $kategori = $_POST['kategori'];

    mysqli_query($conn, "INSERT INTO produk VALUES('','$kode','$nama','$harga_jual','$harga_beli','$stok','$minimal_stok','$deskripsi','$foto','$kategori')");
}

include './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Website</h1>
                    <h1 class="m-0">Muhamad Alpian - TI15 - </h1>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Data Produk</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="./form_produk.php" class="btn btn-primary">Tambah Produk</a>
                                    </div>
                                    <table cellpadding="5" cellspacing="1">
                                        <tr>
                                            <th style="text-align:center;padding:2rem">No</th>
                                            <th style="text-align:center;padding:2rem">Kode</th>
                                            <th style="text-align:center;padding:2rem">Nama Produk</th>
                                            <th style="text-align:center;padding:2rem">Harga Jual</th>
                                            <th style="text-align:center;padding:2rem">Stok</th>
                                            <th style="text-align:center;padding:2rem">Kategori</th>
                                            <th style="text-align:center;padding:2rem">Aksi</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT produk.*, kategori_produk.nama AS nama_kategori FROM produk INNER JOIN kategori_produk ON produk.kategori_produk_id = kategori_produk.id");
                                        ?>
                                        <?php foreach ($query as $x) : ?>
                                            <tr style="text-align: center;">
                                                <td><?= $no ?></td>
                                                <td><?= $x['kode'] ?></td>
                                                <td><?= $x['nama'] ?></td>
                                                <td><?= $x['harga_jual'] . "$" ?></td>
                                                <td><?= $x['stok'] ?></td>
                                                <td><?= $x['nama_kategori'] ?></td>
                                                <td>
                                                    <a href="detail_produk.php?id=<?= $x['id'] ?>" class="btn btn-primary mr-1">Detail</a>
                                                    <a href="edit_produk.php?id=<?= $x['id'] ?>" class="btn btn-warning mr-1">Edit</a>
                                                    <a href="hapus_produk.php?id=<?= $x['id'] ?>" class="btn btn-danger mr-1" onclick="if(!confirm('Anda Yakin Hapus Data Kategori <?= $x['nama'] ?>?')) {return false}">Delete</a>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                Footer
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>
<!-- /.content-header -->
<!-- ./wrapper -->

<?php include './layout/footer.php'; ?>