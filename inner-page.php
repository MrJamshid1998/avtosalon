<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UzMotors</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/images.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Techie - v2.1.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="index.html">AutoSalon</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="active"><a href="index.html">Asosiy</a></li>
                            <li><a href="index.html#about">Yangiliklar</a></li>
                            <li><a href="index.html#services">Bizning xizmatlar</a></li>
                            <li><a href="index.html#portfolio">Mashinalar</a></li>
                            <li><a href="index.html#contact">Aloqa</a></li>

                        </ul>
                    </nav>
                    <!-- .nav-menu -->

                </div>
            </div>

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Ichki sahifa</h2>
                    <ol>
                        <li><a href="index.html">Asosiy</a></li>
                        <li>Ichki sahifa</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->
<?php
if(isset($_GET['mid'])){
    $mid = $_GET['mid'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $baza = 'autosalon';
// echo ("id raqam:".$mid);
    $link = mysqli_connect($host, $user, $pass, $baza);
    if(!$link){
        echo 'Хато: '
        .mysqli_connect_errno()
        .':'
        .mysqli_connect_error();
    }

    $result = mysqli_query($link, "SELECT * FROM `mashinalar` WHERE id=$mid");
    $row = mysqli_fetch_array($result);
    
?>

        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo($row[4]) ?>" alt="Mashina rasmi topilmadi." width="100%" height="100%"/>
                    </div>
                    <div class="col-md-6">
                        <h1>Mashina nomi <?php echo($row[1]) ?></h1> 
                        <h2>Model: <?php echo($row[2]) ?></h2>
                        <h2>Narxi: <?php echo($row[3]) ?></h2>
                        <h3>Ma'lumot:</h3>
                        <p><?php echo($row[5]) ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Mashinani sotib olish</h1>
                    </div>
                    <div class="col-md-12 bg-light">
                        <form action="baza1.php" method="POST">
                            <input type="hidden" name="mid" value="<?php echo($row[0]) ?>">
                            <div class="col-md-12">
                                <label for="fio" class="control-label c-black">FIO:</label>
                                <input type="text" required class="form-control m-2" id="fio" name="fio" plaseholder="FIO">
                            </div>
                            <div class="col-md-12">
                                <label for="tel" class="control-label c-black">Tel:</label>
                                <input type="text" required id="tel" class="form-control m-2" name="tel" plaseholder="901234567">
                            </div>
                            <div class="col-md-12">
                                <label for="pas" class="control-label c-black">Pasport seriya va raqami:</label>
                                <input type="text" id="pas" name="pas" required class="form-control m-2" plaseholder="AB1234567">
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Sotib olish" class="form-control btn-success m-2">
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </section>
<?php } ?>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>AutoSalon</h3>
                        <p>
                            O`zbekiston Respublikasi, 100060, Toshkent shahar, Mirobod tumani, Nukus ko`chasi,8 <br><br>
                            <strong>Telefon:</strong> +99878-141-77-77<br>
                            <strong>Email:</strong> info@uzautomotors.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Main Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#">Asosiy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">Yangiliklar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#services">Bizning xizmatlar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#portfolio">Mashinalar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html#contact">Aloqa</a></li>
                        </ul>
                    </div>

                    
                    <div class="col-lg-7 col-md-6 footer-newsletter">
                        <iframe src="https://www.autostrada.uz/gm-uzbekistan/" frameborder="0" width="100%" height="300px"></iframe>
                        <!-- <h4>Qidiruv tizimi</h4>
                      <p></p>
                      <form action="" method="post">
                          <input type="text" name="email"><input type="submit" value="Jo`natish">
                      </form> -->
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Dasturchi <strong><span>Shoymardonov Jamshid</span></strong>. Email <a style="color: #0891f2;" href="mailto:jamshid.shoymardonov@mail.ru">jamshid.shoymardonov@mail.ru</a> Barcha xizmatlar litsenziyalangan.
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="http://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="http://facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="http://instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="http://gmail.com/" class="google-plus"><i class="bx bxl-google"></i></a>
                    <a href="http://linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>