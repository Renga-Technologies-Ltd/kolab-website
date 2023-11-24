<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Kolab - Index</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <link href="assets/css/style.css" rel="stylesheet" />
  <style>
    .client-logo {
      width: 100px;
      height: 100px;
      object-fit: contain;
      /* Ensures the image fits within the specified width and height without stretching */
    }
  </style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.php"><span>Kolab</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="btn-get-started animate__animated animate__fadeInUp active" href="index.php">Home</a></li>
          <a href="About.php" class="btn-get-started animate__animated animate__fadeInUp">About</a>
          <a href="Services.php" class="btn-get-started animate__animated animate__fadeInUp">Services</a>
          <a href="contact.php" class="btn-get-started animate__animated animate__fadeInUp">Contact Us</a>
          <div class="d-none d-lg-block ms-lg-3">
                            <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Book a Demo</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Let's work together</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                 Do you have a project in mind which we might be of help with?
                 <div class="offcanvas-body">
                 Talk to us using the form below and we shall get back to you at your convenience to explain in detail about our scope!
              <div
                 class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Name</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control"  required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="Email">Email</label>

                                <input type="Email" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" required="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label mb-2" for="Email">Phone number</label>

                                <input name="member-login-password" id="member-login-password"  class="form-control" required="">
                            </div>
                            <div class="mb-4">
                            <label for="cars">Which solution are you interested in?</label>

<select name="cars" id="cars">
  <option value="volvo">  IT consultancy</option>
  <option value="saab">Enterprise Bussiness Solutions   </option>
  <option value="mercedes">IT Infrastructure & Security       </option>
  <option value="audi">Application Development</option>
  <option value="audi">Security Solution</option>
</select>

                            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Send message</button>
                            </div>
                        </div>
                    </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            Welcome to <span>Kolab</span>
          </h2>
          <p class="animate__animated animate__fadeInUp">
            IT Solutions and Services Company focused on helping enterprises
            to transform their businesses through innovative and optimal use
            of technology.
          </p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>

        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">IT Consultancy Services</a></h4>
              <p class="description">
              Empowering businesses with strategic IT insights and solutions to drive growth and efficiency.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">
                <a href="">Enterprise Business Solutions</a>
              </h4>
              <p class="description">
              Delivering comprehensive Enterprise Business Solutions tailored to your organization's unique needs and challenges
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Application Development</a></h4>
              <p class="description">
              Pioneering innovative and tailored Application Development solutions to bring your ideas to life.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">
                <a href="">IT Infrastructure & Security Solutions </a>
              </h4>
              <p class="description">
              Securing and optimizing your digital foundation with IT Infrastructure & Security Solutions that safeguard your data and operations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>About Us</h2>
          <p>
            Kolab Technologies was Incorporated in 2018 in kenya focused on IT
            Solutions and Consultancy.In a span of 2 years we expanded our
            wings to Uganda, Rwanda, DRC, Bangladesh and Nepal.
          </p>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="" />
          </div>
          <div class="col-md-7 pt-4">
            <h3>Our team</h3>
            <p class="fst-italic">
              Kolab Core team comprising of experts with 20+ years of industry
              experience from different verticals and geographies. This makes
              us unique from competition and provide solution delivery based
              on customer need and requirement.
            </p>
            <ul>
              <li>
                <i class="bi bi-check"></i>
              </li>
              <li>
                <i class="bi bi-check"></i>
              </li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="" />
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <!-- <h3>Corporis temporibus maiores provident</h3> -->
            <p class="fst-italic">
              Kolab has builts its offshore Software Development Centre in
              India to tap into latest technology tools and framework for
              developing relevant solutions for its clients. It has built
              strong team focusing on technologies like Open Source, AI,
              Blockchain, etc.
            </p>
            <p>
              At Kolab, we are focused on our customers and their business
              priorities. We always try to address these priorities through
              Technology and help customers to Transform the business. This
              enables our customers to achieve their goals and move ahead of
              competition.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->
    <section class="clients section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Partners</h2>
          <p>Here are some of the organizations we've had the privilege to work with.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-2 box">
            <img src="./assets/img/partners/alfresco_logo.fw_.png" alt="alfresco" class="client-logo">
          </div>

          <div class="col-lg-2 box">
            <img src="./assets/img/partners/botpress-logo.png" alt="botpress" class="client-logo">
          </div>

          <div class="col-lg-2 box">
            <img src="./assets/img/partners/Dell_Logo.png" alt="Dell" class="Dell">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/erpnext-logo-blue-v2.png" alt="ERP next" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/HP-Logo.png" alt="HP" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/instasafe-1.png" alt="InstaSafe" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/mifos-logo.png" alt="MIFOS" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/odoo.png" alt="Odoo" class="client-logo">
          </div>
          <!-- <div class="col-lg-2 box">
            <img src="./assets/img/partners/Sap-B1-Logo-png.png" alt="SAP one" class="client-logo">
          </div> -->
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/Seceon-Logo-no-white-outline-1.png" alt="Seceon" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/social_posts_logo.png" alt="Scale" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/Stratroom-1-1.png" alt="Stratroom" class="client-logo">
          </div>
          <div class="col-lg-2 box">
            <img src="./assets/img/partners/veeam-backup-and-replication.png" alt="Stratroom" class="client-logo">
          </div>
          <!-- Add more client logos as needed -->

        </div>

      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('common/footer.php');
  ?>

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>