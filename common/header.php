<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light">
          <a href="index.php"><span>Kolab</span></a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="./assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="btn-get-started animate__animated animate__fadeInUp active" href="index.php">Home</a></li>
          <a href="about.php" class="btn-get-started animate__animated animate__fadeInUp">About</a>
          <a href="services.php" class="btn-get-started animate__animated animate__fadeInUp">Services</a>
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