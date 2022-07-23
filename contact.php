<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message']){
    $message =$_SESSION['message'];
    echo "<script type = 'text/javascript'>
    alert ('$message');
    </script>";
}
    $host = "localhost";
    $user = "root";
    $password = "";
    $db ="techshala";
    $data = mysqli_connect($host,$user,$password,$db);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VP TechShala</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/images/fav.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">
      <img src="./assets/images/fav.png" height = "50px"alt="" srcset="">
      </a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

         

       

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="registrationform.php">Event Registration</a>
              <a class="dropdown-item " href="techtalk.html">Techtalk</a>
              <a class="dropdown-item " href="hackathon.html">Hackathon</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

     
    </div>
  </nav>


</head>

<body>
<section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a"></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Contact Single ======= -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.955560694125!2d72.8677590149003!3d19.0216797871191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf48beff6adb%3A0x8b57459cf41f7a2c!2sVidyalankar%20Polytechnic!5e0!3m2!1sen!2sin!4v1648455111429!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form action="newsletterdatacheck.php" method="POST" >
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a"
                        placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a"
                        placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control form-control-lg form-control-a"
                        placeholder="Phone Number" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8"
                        placeholder="Message" required></textarea>
                    </div>
                  </div>
                  

                  <div class="col-md-12 text-center">
                    <button type="submit" name="apply"  id="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="bi bi-envelope"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">principal@vpt.edu.in</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">022 2416 1126</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="bi bi-geo-alt"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Vidyalankar Campus, Vidyalankar College Rd, Wadala East, Sangam Nagar, Mumbai, Maharashtra 400037.
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="bi bi-share"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://m.facebook.com/Vidyalankar.VP/">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://mobile.twitter.com/VidyalankarPoly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://instagram.com/vp_vidyalankar?utm_medium=copy_link">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://in.linkedin.com/company/vidyalankar-polytechnic---india">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Single-->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">VP TechShala</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                The words Tech standing for Technology and Shala meaning school themselves explain us the aim of our committee. To make students technically sound through the meduim of diffrent events in a way that they enjoy this processes of learning.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email .</span> principal@vpt.edu.in
                </li>
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> 022 2416 1126
                </li>
              </ul>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="about.html">About</a>
              </li>
              <li class="list-inline-item">
                <a href="registrationform.php">Event</a>
              </li>

              <li class="list-inline-item">
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://m.facebook.com/Vidyalankar.VP/">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://mobile.twitter.com/VidyalankarPoly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://instagram.com/vp_vidyalankar?utm_medium=copy_link">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://in.linkedin.com/company/vidyalankar-polytechnic---india">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">VP TechShala</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
        
            Designed by <a href="#">Open Source Pundits</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>