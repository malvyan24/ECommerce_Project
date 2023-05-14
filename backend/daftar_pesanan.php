<?php require './koneksi_database.php'; ?>
<?php include './layout/header.php'; ?>
<?php include './layout/navbar.php'; ?>
<?php include './layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Website</h1>
                    <h1 class="m-0">Muhamad Alpian - TI15 - 0110222184</h1>
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
                            <h5 class="card-title">Data Pesanan</h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <table cellpadding="5" cellspacing="1">
                                    <tr>
                                        <th style="text-align:center;padding:1.5rem">No</th>
                                        <th style="text-align:center;padding:1.5rem">Tanggal</th>
                                        <th style="text-align:center;padding:1.5rem">Nama Pemesan</th>
                                        <th style="text-align:center;padding:1.5rem">Alamat Pemesanan</th>
                                        <th style="text-align:center;padding:1.5rem">No HP</th>
                                        <th style="text-align:center;padding:1.5rem">Email</th>
                                        <th style="text-align:center;padding:1.5rem">Jumlah Pesanan</th>
                                        <th style="text-align:center;padding:1.5rem">Deskripsi</th>
                                        <th style="text-align:center;padding:1.5rem">Produk</th>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($conn, "SELECT * FROM pesanan INNER JOIN produk ON pesanan.produk_id = produk.id");
                                    foreach ($query as $x) {
                                        echo "<tr style='text-align:center'>";
                                        echo "<td>" . $no . "</td>";
                                        echo "<td>" . $x['tanggal'] . "</td>";
                                        echo "<td>" . $x['nama_pemesanan'] . "</td>";
                                        echo "<td>" . $x['alamat_pemesanan'] . "</td>";
                                        echo "<td>" . $x['no_hp'] . "</td>";
                                        echo "<td>" . $x['email'] . "</td>";
                                        echo "<td>" . $x['jumlah_pesanan'] . "</td>";
                                        echo "<td>" . $x['deskripsi'] . "</td>";
                                        echo "<td>" . $x['nama'] . "</td>";
                                        echo "</tr>";
                                        $no++;
                                    }
                                    ?>
                                </table>
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