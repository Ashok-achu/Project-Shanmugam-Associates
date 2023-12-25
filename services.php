<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shanmugam Associates - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/asset/SA1.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="index.html" class="logo">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/asset/2.png" alt="Shanmugam Associates Logo">
      </a>
      
  
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li class="dropdown"><a href="#"><span>Proviving</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Villa.php">Villa</a></li>
              <li><a href="Highrisebuilding.php">High Rise Building</a></li>
              <li><a href="Painting.php">Painting</a></li>
              <li><a href="Tilelaying.php">Tile Laying</a></li>
              <li><a href="Epoxy.php">Epoxy</a></li>
              <li><a href="#">Dropdown 1</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      <?php
session_start(); // Start the session on all pages where you want to use this variable

// Check if the user is logged in
if (isset($_SESSION['user_logged_in']))  {
    // Display logout button
    echo '<a href="logout.php" class="btn btn-outline-light"><i class="bi bi-box-arrow-right"></i> Logout</a>';
} else {
    // Display login button
    echo '<a href="login.html" class="btn btn-outline-light"><i class="bi bi-person"></i> Login</a>';
}
?>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>Whether you're envisioning a new home, upgrading your commercial space, or contributing to community development, Shanmugam Associates is your partner in construction excellence.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Residential Construction</h3>
              <p>From custom homes to multi-unit developments, we specialize in creating living spaces that reflect your style and exceed your expectations. Our residential construction services blend aesthetics, functionality, and durability.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Commercial Construction:</h3>
              <p>Shanmugam Associates understands the unique demands of commercial projects. Whether it's an office building, retail space, or industrial facility, we bring expertise to ensure timely and cost-effective construction.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Renovation and Remodeling:</h3>
              <p>Enhance the value and appeal of your property with our renovation and remodeling services. We breathe new life into existing structures, combining modern design with sustainable solutions.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Infrastructure Development:</h3>
              <p>As contributors to community growth, we take pride in our role in infrastructure development. From roads to utilities, our projects are designed to withstand the test of time.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Project Management:</h3>
              <p>Trust Shanmugam Associates to oversee the entire construction process. Our project management services ensure timely delivery, adherence to budget, and a seamless experience for our clients.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Construction and Execution:</h3>
              <p>Shanmugam Associates brings your project to life with skilled craftsmanship, attention to detail, and a commitment to timelines.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Servie Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <h3>Quasi eaque omnis</h3>
            <p>Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam occaecati.</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip</span></li>
              <li><i class="bi bi-check2"></i> <span>Duis aute irure dolor in reprehenderit</span></li>
              <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <h3>Et nemo dolores consectetur</h3>
            <p>Ducimus ea quam et occaecati est. Temporibus in soluta labore voluptates aut. Et sit soluta non repellat sed quia dire plovers tradoria</p>

            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Enim temporibus maiores eligendi</span></li>
              <li><i class="bi bi-check2"></i> <span>Ut maxime ut quibusdam quam qui</span></li>
              <li><i class="bi bi-check2"></i> <span>Officiis aspernatur in officiis</span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <h3>Staque laboriosam modi</h3>
            <p>Velit eos error et dolor omnis voluptates nobis tenetur sed enim nihil vero qui suscipit ipsum at magni. Ipsa architecto consequatur aliquam</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Quis voluptates laboriosam numquam</span></li>
              <li><i class="bi bi-check2"></i> <span>Treva libero sunt quis veniam ut</span></li>
              <li><i class="bi bi-check2"></i> <span>Debitis eos est est corrupti</span></li>
            </ul>
          </div><!-- End feature item-->

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <h3>Dignissimos suscipit iste</h3>
            <p>Molestiae occaecati assumenda quia saepe nobis recusandae at dicta ducimus sequi numquam commodi est in consequatur ea magnam quia itaque</p>
            <ul class="list-unstyled">
              <li><i class="bi bi-check2"></i> <span>Veritatis qui reprehenderit quis</span></li>
              <li><i class="bi bi-check2"></i> <span>Accusantium vel numquam sunt minus</span></li>
              <li><i class="bi bi-check2"></i> <span>Voluptatem pariatur est sationem</span></li>
            </ul>
          </div><!-- End feature item-->

        </div>

      </div>
    </section><!-- End Servie Cards Section -->

    <!-- ======= Alt Services Section 2 ======= -->
   

    <!-- ======= Testimonials Section ======= -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>SHANMUGAM ASSOCIATES</h3>
              <p>
                NO.5,MARIAMMAN KOVIL STREET, <br>
                VADAVALLI,COIMBATORE-641 046<br><br>
                <strong>Phone:</strong>+91 9443522285<br>
                <strong>Email:</strong>associatesshanmugam@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100087821433496&mibextid=ZbWKwL" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/shanmugam_associates?igshid=NzZlODBkYWE4Ng==" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Villa</a></li>
              <li><a href="#">High Rise Building</a></li>
              <li><a href="#">Painting</a></li>
              <li><a href="#">Texture</a></li>
              <li><a href="#">Epoxy</a></li>
            </ul>
          </div><!-- End footer links column-->

         

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>SHANMUGAM ASSOCIATES</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://instagram.com/ashok_achu.17?igshid=M2RkZGJiMzhjOQ=="">newway</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>