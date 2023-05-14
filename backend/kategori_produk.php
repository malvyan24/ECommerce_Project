<!-- // Judul: Kategori Produk -->
<?php require './koneksi_database.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $logo = $_POST['logo'];

    mysqli_query($conn, "INSERT INTO kategori_produk VALUES('','$nama','$logo')");
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
                            <h5 class="card-title">Kategori Produk</h5>

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
                                        <a href="./form_kategori.php" class="btn btn-primary">Tambah Produk</a>
                                    </div>
                                    <table cellpadding="5" cellspacing="1">
                                        <tr>
                                            <th style="text-align:center; padding: 2rem;">No</th>
                                            <th style="text-align:center; padding: 2rem;">Nama Kategori</th>
                                            <th style="text-align:center; padding: 2rem;">Aksi</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM kategori_produk");
                                        ?>
                                        <?php foreach ($query as $x) : ?>
                                            <tr>
                                                <td style="text-align: center;"><?= $no ?></td>
                                                <td style="text-align: center;"><?= $x['nama'] ?></td>
                                                <td>
                                                    <a href='detail_kategori.php?id=<?= $x['id'] ?>' class='btn btn-primary mr-1'>Detail</a>
                                                    <a href='edit_kategori.php?id=<?= $x['id']; ?>' class='btn btn-warning mr-1'>Edit</a>
                                                    <a href="hapus_kategori.php?id=<?= $x['id'] ?>" class='btn btn-danger mr-1' onclick="if(!confirm('Anda Yakin Hapus Data Kategori <?= $x['nama'] ?>?')) {return false}">Delete</a>
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