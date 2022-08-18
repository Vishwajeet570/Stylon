<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <title>Stylon Shopping - About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!--


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
  </head>
  <style>
    .team-member img {
      height: 420px;
    }
  </style>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><h2>Stylon <em>Shopping</em></h2></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="indexweb.php"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="frontpage.php">Book Salon</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>
                it’s convenient. Salon web application can be developed that
                allows customers to book salon services quickly and easily.It
                will help in relieving pressure on staff, and will help in
                cancellations and fill empty spots without any extra effort.<br /><br />It
                will free up days for staff, and instead of a staff member
                having to call to confirm appointments, once a booking is made,
                whether done online or through the salon, automated
                confirmations will get sent out via email or text.
              </p>
              <ul class="social-icons">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-behance"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="./assets/images/team1.jpg" alt="" />
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Vishwajeet Singh Rathore</h4>
                <span>Developer</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing itaque
                  corporis nulla.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="./assets/images/team2.png" alt="" />
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Shreya Gehlot</h4>
                <span>Developer</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing itaque
                  corporis nulla.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="./assets/images/team3.jpg" alt="" />
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Pranav Upadhyay</h4>
                <span>Developer</span>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing itaque
                  corporis nulla.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Product Management</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur an adipisicing elit.
                  Itaque, corporis nulla at quia quaerat.
                </p>
                <a href="#" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Customer Relations</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur an adipisicing elit.
                  Itaque, corporis nulla at quia quaerat.
                </p>
                <a href="#" class="filled-button">Details</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>Global Collection</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur an adipisicing elit.
                  Itaque, corporis nulla at quia quaerat.
                </p>
                <a href="#" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Partners</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="2" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="3" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="4" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="5" />
              </div>

              <div class="client-item">
                <img src="assets/images/client-01.png" alt="6" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 Stylon Shopping Co., Ltd. :</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>
  </body>
</html>
