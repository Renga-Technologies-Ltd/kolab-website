<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  
  <title>consultancy - Kolab </title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />

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
    #main {
    position: relative;
    }
    .overlay-text {
            position: absolute;
            top: 50%; 
            left: 53%; 
            transform: translate(-50%, -50%); 
            color: white; 
            font-size: 28px; 
            font-weight: bold; 
            text-align: center; 
            opacity: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            animation: fadeIn 3s ease-in-out forwards;
        }
</style>

       
  </style>
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.php"><span>Kolab</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="" href="index.php">Home</a></li>
          <a href="about.php" class="">About</a>
          <a href="Services.php" class="">Services</a>

          <a href="contact.php" class="">Contact Us</a>
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
          <div class="offcanvas-body d-flex flex-column">
            <form class="custom-form member-login-form" action="./mail/mail.php" method="post" role="form">
              <div class="member-login-form-body">
                <div class="mb-4">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="mb-4">
                  <input type="Email" name="email" id="Email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-4">
                  <input name="phone" id="number" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="mb-4">
                  <input type="text" name="jobposition" class="form-control" placeholder="Job position" required>
                </div>
                <div class="mb-4">
                  <input type="text" name="companyname" class="form-control" placeholder="Company name" required>
                </div>
                <div class="mb-4">
                  <label for="">Which solution are you interested in?</label>

                  <select name="services" id="services">
                    <option> ---select service---</option>
                    <option value="it consuultancy"> IT consultancy</option>
                    <option value="erp">Enterprise Bussiness Solutions</option>
                    <option value="It sec">IT Infrastructure & Security</option>
                    <option value="App">Application Development</option>
                    <option value="security">Security Solution</option>
                  </select>

                  <div class="form-group mb-6">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="col-lg-5 col-md-7 col-8 mx-auto">
                    <button type="submit" class="form-control">SUBMIT</button>
                  </div>
            </form>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <div class="col-lg-6">
        <img src="./assets/img/Proxy_Server.webp" alt="OUR SERVICES" width="1367" height="300">
    </div>
</head>
<body>

    <div class="image-container">
        <div class="overlay-text">SERVICES</div>
    </div>
    
    </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

</body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .cards-container {
      display: flex;
      justify-content: space-between; /* You can use other values like space-around or space-evenly if needed */
    }

    .card {
      width: 400px;
      height: 280;
      margin: auto;
      margin-top: 5%;
      background-color: #f2f2f2;
      border-radius: 10px;
      justify-content: space-between;
      flex: wrap;
      overflow: hidden;
      perspective: 1000px;
      box-shadow: 0 0 0 5px #ffffff80;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    
    }

    .card__image {
      width: 400px;
      height: 250px;
    }
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}
.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
    .card__content {
      padding: 15px;
    }
    .card:hover .card__content {
  transform: rotateX(0deg);
}
.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}
.card:hover svg {
  scale: 0;
}
.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}
    /* Add additional styling as needed */
  </style>
</head>
<body>

<div class="cards-container">
  <div class="card">
    <img src="./assets/img/NETWORK I.JPG" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Network Infrastructure Management</p>
      <p class="card__description">Ensure seamless connectivity and optimal performance with our network infrastructure management services. We design, implement, and maintain robust network solutions tailored to your business requirements. From hardware setup to ongoing monitoring, we've got your network covered.</p>
    </div>
  </div>

  <div class="card">
    <img src="./assets/img/123.png" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Cybersecurity Solutions</p>
      <p class="card__description">Safeguard your digital assets with our advanced cybersecurity solutions. Our experts assess vulnerabilities, implement robust security protocols, and provide ongoing monitoring to protect your business from evolving cyber threats. Trust us to keep your data secure and compliant.</p>
    </div>
  </div>

  <div class="card">
    <img src="./assets/img/Cloud Computing Services.JPG" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Cloud Computing Services</p>
      <p class="card__description">Unlock the full potential of cloud computing with our specialized services. Whether you're considering a migration to the cloud, need assistance with cloud strategy, or require ongoing support, we have the expertise to optimize your cloud environment for efficiency and scalability.</p>
    </div>
  </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .cards-container {
      display: flex;
      justify-content: space-between; 
    }

    .card {
      width: 400px;
      height: 280;
      left: 10PX;
      margin: auto;
      margin-top: 5%;
      margin-bottom: 2%;
      background-color: #f2f2f2;
      border-radius: 10px;
      justify-content: space-between;
      flex: wrap;
      overflow: hidden;
      perspective: 1000px;
      box-shadow: 0 0 0 5px #ffffff80;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    
    }

    .card__image {
      width: 400px;
      height: 250px;
    }
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}
.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
    .card__content {
      padding: 15px;
    }
    .card:hover .card__content {
  transform: rotateX(0deg);
}
.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}
.card:hover svg {
  scale: 0;
}
.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}
    /* Add additional styling as needed */
  </style>
</head>
<body>

<div class="cards-container">
  <div class="card">
    <img src="./assets/img/project.WEBP" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">IT Project Management</p>
      <p class="card__description">Ensure the successful execution of your IT initiatives with our project management expertise. We guide you through the entire project lifecycle, from planning and execution to monitoring and completion. Our goal is to deliver projects on time, within budget, and exceeding expectations.</p>
    </div>
  </div>

  <div class="card">
    <img src="./assets/img/software.jpg" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">Custom Software Development</p>
      <p class="card__description">Drive innovation with our custom software development services. We create tailored solutions to address your specific business challenges. From web applications to mobile solutions, our development team delivers high-quality, scalable software that aligns with your strategic goals.</p>
    </div>
  </div>

  <div class="card">
    <img src="./assets/img/ERP.JFIF" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">ERP (Enterprise Resource Planning)</p>
      <p class="card__description">We specialize in designing, implementing, and maintaining robust ERP systems, addressing the specific needs of your business. From initial hardware infrastructure setup to ongoing monitoring and support, our end-to-end services ensure the seamless and efficient operation of your business processes.</p>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .cards-container {
      display: flex;
      justify-content: space-between; 
    }

    .card {
      width: 400px;
      height: 280;
      left: 10PX;
      margin: auto;
      margin-top: 5%;
      margin-bottom: 2%;
      background-color: #f2f2f2;
      border-radius: 10px;
      justify-content: space-between;
      flex: wrap;
      overflow: hidden;
      perspective: 1000px;
      box-shadow: 0 0 0 5px #ffffff80;
      transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    
    }

    .card__image {
      width: 400px;
      height: 250px;
    }
.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}
.card__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #f2f2f2;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
    .card__content {
      padding: 15px;
    }
    .card:hover .card__content {
  transform: rotateX(0deg);
}
.card__title {
  margin: 0;
  font-size: 24px;
  color: #333;
  font-weight: 700;
}
.card:hover svg {
  scale: 0;
}
.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
}
    /* Add additional styling as needed */
  </style>
</head>
<body>

<div class="cards-container">
  <div class="card">
    <img src="./assets/img/consulting.jpg" viewBox="0 0 24 24" class="card__image">
    <div class="card__content">
      <p class="card__title">IT Consulting</p>
      <p class="card__description">Achieve IT success with our specialized project management consultancy. We lead your initiatives by offering comprehensive guidance across the project lifecycle, ensuring a smooth journey from planning and execution to meticulous monitoring and successful completion.</p>
    </div>
  </div>

  
   

  
    <div class="card__content">
      <p class="card__title">ERP (Enterprise Resource Planning)</p>
      <p class="card__description">Streamline your business operations with our comprehensive ERP services. Our team designs, implements, and maintains robust ERP systems custom-tailored to meet the unique demands of your business. From initial setup of hardware infrastructure to continuous monitoring and support, we provide end-to-end ERP services to ensure your business processes run efficiently and effectively.</p>
    </div>
  </div>
</div>
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

    