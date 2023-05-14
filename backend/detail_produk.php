<?php
include './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';
require_once './koneksi_database.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id'");
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
                            <h5 class="card-title">Detail Produk</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-4">
                            <?php while ($x = mysqli_fetch_array($query)) { ?>
                                <form method="post" action="./produk.php">
                                    <h1>Detail Produk <?= $x['nama'] ?></h1>
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label>
                                        <div class="col-8">
                                            <input id="kode" name="kode" type="text" class="form-control" value="<?= $x['kode'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $x['nama'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                                        <div class="col-8">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control" value="<?= $x['harga_jual'] . "$" ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                                        <div class="col-8">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control" value="<?= $x['harga_beli'] . "$" ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label>
                                        <div class="col-8">
                                            <input id="stok" name="stok" type="text" class="form-control" value="<?= $x['stok'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="minimal stok" class="col-4 col-form-label">Minimal Stok</label>
                                        <div class="col-8">
                                            <input id="minimal_stok" name="minimal_stok" type="text" class="form-control" value="<?= $x['min_stok'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                        <div class="col-8">
                                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" disabled><?= $x['deskripsi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto" class="col-4 col-form-label">Foto</label>
                                        <div class="col-8">
                                            <input id="foto" name="foto" cols="40" rows="5" class="form-control" value="<?= $x['foto'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori" class="col-4 col-form-label">Kategori Produk</label>
                                        <div class="col-8">
                                            <select id="kategori" name="kategori" class="custom-select" disabled>
                                                <?php
                                                $id_kategori = $x['kategori_produk_id'];
                                                $query2 = mysqli_query($conn, "SELECT * FROM kategori_produk WHERE id = '$id_kategori'");
                                                ?>
                                                <?php while ($y = mysqli_fetch_array($query2)) { ?>
                                                    <option selected><?= $y['nama'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <a href="produk.php" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
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