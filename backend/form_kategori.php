<?php
include './layout/header.php';
include './layout/navbar.php';
include './layout/sidebar.php';
require_once './koneksi_database.php';

$query = mysqli_query($conn, "SELECT * FROM kategori_produk");
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
                            <h5 class="card-title">Form Kategori</h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-4">
                            <form method="post" action="./kategori_produk.php">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo" class="col-4 col-form-label">Logo</label>
                                    <div class="col-8">
                                        <input id="logo" name="logo" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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