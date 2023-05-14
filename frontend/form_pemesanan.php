<?php require './koneksi_database.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Helmet Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="./index.php">Helmet Shop</a></div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="men.html">Men</a>
                                    <ul class="dropdown">
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colorlib-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="intro">Form Pemesanan Produk</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form method="post" action="konfirmasi_pesanan.php">
                    <div class="form-group row">
                        <label for="tanggal" class="col-8 col-form-label">Tanggal</label>
                        <div class="col-12">
                            <div class="input-group">
                                <input id="tanggal" name="tanggal" type="date" style="border: 2px solid black; border-radius: 3px;" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_pemesan" class="col-8 col-form-label">Nama Pemesan</label>
                        <div class="col-12">
                            <input id="nama_pemesan" name="nama_pemesan" type="text" style="border: 2px solid black; border-radius: 3px;" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-8 col-form-label">Alamat Pemesanan</label>
                        <div class="col-12">
                            <input id="alamat" name="alamat" type="text" style="border: 2px solid black; border-radius: 3px;" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-8 col-form-label">Nomor HP</label>
                        <div class="col-12">
                            <input id="no_hp" name="no_hp" type="text" style="border: 2px solid black; border-radius: 3px;" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-8 col-form-label">Email</label>
                        <div class="col-12">
                            <input id="email" name="email" type="text" style="border: 2px solid black; border-radius: 3px;" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk" class="col-8 col-form-label">Produk</label>
                        <div class="col-12">
                            <select id="produk" name="produk" style="border: 2px solid black; border-radius: 3px;" required>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM produk");
                                ?>
                                <?php foreach ($query as $x) : ?>
                                    <option value="<?= $x['id'] ?>"><?= $x['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_pesanan" class="col-8 col-form-label">Jumlah Pesanan</label>
                        <div class="col-12">
                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" min="0" style="border: 2px solid black; border-radius: 3px;" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-8 col-form-label">Deskripsi</label>
                        <div class="col-12">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" style="border: 2px solid black; border-radius: 3px;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-12">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <footer id="colorlib-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col footer-col colorlib-widget">
                            <h4>About helmet</h4>
                            <p>Helmets are very important to protect against collisions during motor vehicle accidents</p>
                            <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col footer-col colorlib-widget">
                            <h4>Customer Care</h4>
                            <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">Gift Voucher</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Customer Services</a></li>
                                <li><a href="#">Site maps</a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col footer-col colorlib-widget">
                            <h4>Information</h4>
                            <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                            </p>
                        </div>

                        <div class="col footer-col">
                            <h4>News</h4>
                            <ul class="colorlib-footer-links">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Exhibitions</a></li>
                            </ul>
                        </div>

                        <div class="col footer-col">
                            <h4>Contact Information</h4>
                            <ul class="colorlib-footer-links">
                                <li>Indonesia <br> STT NURUL FIKRI</li>
                                <li><a href="tel://082124556529">0821-2455-6529</a></li>
                                <li><a href="mailto:info@yoursite.com">alpianmuhamad21@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>
                                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->


                                    <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">muhamad alpian TI15 STT Nurul Fikri </a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap 4.1 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>