<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Auto salon</title>
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
    <header id="header" class="fixed-top" style="background-color:black; height:100px;">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="index.html">AutoSalon</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu ">
                        <ul>
                            <li><a href="index.html">Asosiy</a></li>
                            <li><a href="index.html#about">Yangiliklar</a></li>
                            <li><a href="index.html#services">Bizning xizmatlar</a></li>
                            <li><a href="index.html#portfolio">Mashinalar</a></li>
                            <li class="drop-down"><a href="">Sotib olish</a>
                                <ul>
                                    <li><a href="inner-page.php?mid=1">Labo</a></li>
                                    <li><a href="inner-page.php?mid=2">Damas</a></li>
                                    <li><a href="inner-page.php?mid=3">Spark</a></li>
                                    <li><a href="inner-page.php?mid=4">Nexia</a></li>
                                    <li><a href="inner-page.php?mid=5">Cobalt</a></li>
                                    <li><a href="inner-page.php?mid=6">Lasetti</a></li>
                                    <li><a href="inner-page.php?mid=7">Malibu</a></li>
                                    <li><a href="inner-page.php?mid=8">Tracker 2</a></li>
                                    <li><a href="inner-page.php?mid=9">Equinox</a></li>
                                    <li><a href="inner-page.php?mid=10">Traverse</a></li>
                                    <li><a href="inner-page.php?mid=11">Trailblazer</a></li>
                                    <li><a href="inner-page.php?mid=12">Tahoi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html#contact">Aloqa</a>
                            </li>
                            </ul>
                    </nav>
                    <!-- .nav-menu -->

                </div>
            </div>

        </div>
    </header>
    <!-- End Header -->
    <?php
if(isset($_POST['login']) && isset($_POST['pas'])){
    if($_POST['login'] != "admin" && $_POST['pas'] != "1"){
        header("Location:index.html?error=xato");
    }
}
?>
<main id="main" style="margin:200px 0;">

<div id="mh" class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 align="center">Avtomobil sotib olganlar ro`yxati</h1>
        <br />  
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Mashina nomi</th>
                <th scope="col">FIO</th>
                <th scope="col">Telefon</th>
                <th scope="col">Pasport seriya raqami</th>
                </tr>
            </thead>
            <tbody>
              <?php
                    $link = mysqli_connect('localhost','root','','autosalon');
                    $result = mysqli_query($link, "SELECT msotish.id, mashinalar.nomi, msotish.fio, msotish.tel, msotish.passr FROM msotish, mashinalar WHERE msotish.idm = mashinalar.id ORDER BY id DESC");
                while ($row = mysqli_fetch_array($result)){
                  echo("<tr>"); 
                  echo("<th>$row[0]</th>");
                  echo("<td>$row[1]</td>");
                  echo("<td>$row[2]</td>");
                  echo("<td>$row[3]</td>");
                  echo("<td>$row[4]</td>");
                  echo("</tr>");
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area1 -->



<div id="aloqa" class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 align="center"> Jo`natilgan xabarlar </h1>
            <br />
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">FIO</th>
                <th scope="col">Email</th>
                <th scope="col">Kasbi</th>
                <th scope="col">Xabar</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  $result = mysqli_query($link, "SELECT * FROM contact ORDER BY id DESC");
                while ($row = mysqli_fetch_array($result)){
                  echo("<tr>"); 
                  echo("<th>$row[0]</th>");
                  echo("<td>$row[1]</td>");
                  echo("<td>$row[2]</td>");
                  echo("<td>$row[3]</td>");
                  echo("<td>$row[4]</td>");
                  echo("</tr>");
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div id="mashinalar" class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 align="center"> Mashinalar ro`yxati </h1>
            <br />
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Nomi</th>
                <th scope="col">Model</th>
                <th scope="col">Narxi</th>
                <th scope="col">Rasmi</th>
                <th scope="col">Ma'lumot</th>
                    
            </tr>
            </thead>
            <tbody>
              <?php
                  $result = mysqli_query($link, "SELECT * FROM mashinalar ORDER BY id DESC");
                while ($row = mysqli_fetch_array($result)){
                  echo("<tr>"); 
                  echo("<th>$row[0]</th>");
                  echo("<td>$row[1]</td>");
                  echo("<td>$row[2]</td>");
                  echo("<td>$row[3]</td>");
                  echo("<td><img src=$row[4] /></td>");
                  echo("<td>$row[5]</td>");
                  echo("</tr>");
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

</main>

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
