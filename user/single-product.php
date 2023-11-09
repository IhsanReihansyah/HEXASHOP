<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Hexashop - Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="../assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../assets/css/lightbox.css">

</head>

<body>

    <?php
    include '../koneksi.php';

    $produk = mysqli_query($conn, "SELECT * from produk where id='$_GET[id]'");

    while ($p = mysqli_fetch_array($produk)) {
        $id = $p["id"];
        $nama_produk = $p["nama_produk"];
        $image = $p["image"];
        $harga = $p["harga"];
        $id_ukuran = $p["id_ukuran"];
        $id_status = $p["id_status"];
    }

    ?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="../assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="scroll-to-section"><a href="men.php">Men's</a></li>
                            <li class="scroll-to-section"><a href="women.php">Women's</a></li>
                            <li class="scroll-to-section"><a href="kids.php">Kid's</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </li>
                            <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Product Page</h2>
                        <span>Awesome &amp; Creative</span>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="<?php echo $image ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>
                            <?php echo $nama_produk ?>
                        </h4>
                        <span>
                            <?php echo rupiah($harga); ?>
                        </span>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span>The shirt with white stripes plus black shades on the side adds a minimalist impression</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Order now, don't miss out because there's a 30% discount this month.</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input id="quantity" type="number" step="1" min="1" max="" name="quantity" value="1"
                                        title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div>

                        <div class="total">
                            <h4>Total:
                                <input type="hidden" id="hargaSatuan" value="<?php echo $harga; ?>"> 
                                <span id="rupiah"><?php echo rupiah($harga) ?> </span>
                            </h4>
                            <br><br>
                            <div class="main-border-button"><a href="#">Add To Cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="../assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="http://googlemaps.com">Yogyakarta, FL 33160, Indonesia</a></li>
                            <li><a href="index.php">hexashop@company.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="men.php">Men’s Shopping</a></li>
                        <li><a href="women.php">Women’s Shopping</a></li>
                        <li><a href="kids.php">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php">Homepage</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="contact.php">Help</a></li>
                        <li><a href="contact.php">FAQ's</a></li>
                        <li><a href="contact.php">Shipping</a></li>
                        <li><a href="contact.php">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                            <br>Design: <a href="https://www.instagram.com/ihsanreihaa" target="_parent"
                                title="free css templates">Ihsan Reihansyah</a>
                        </p>
                        <ul>
                            <li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://behance.com"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/accordions.js"></script>
    <script src="../assets/js/datepicker.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/quantity.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

    <script>

    $(document).ready(function () { // ketika dokumen ready maka eksekusi kode dibawah
        $("#quantity").change(function(){   // Jika Ada Perubahan Value dr Id Quantity 
            var qty = $( "#quantity" ).val();   // menampung variable yg berganti dr id quantity
            var harga = $( "#hargaSatuan" ).val();  // menampung variable dr input element yg id nya hargaSatuan
            document.getElementById('rupiah').innerHTML = rupiahJS(qty*harga);
        });
    });

    const rupiahJS = (number)=>{
        return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR"
        }).format(number);
    }

        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

        <?php
        function rupiah($angka)
        {

            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
            return $hasil_rupiah;

        }

        ?>

    </script>

</body>

</html>