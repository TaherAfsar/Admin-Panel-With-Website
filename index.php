<?php


    $host = "localhost";
    $user = "root";
    $password = "";
    $db ="techshala";
    $data = mysqli_connect($host,$user,$password,$db);

    $sql = "SELECT *FROM events"; 
    $result = mysqli_query($data,$sql);
    $sql3 = "SELECT *FROM imageslider"; 
    $result3 = mysqli_query($data,$sql3);


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
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.html">About</a>
          </li>

         

       

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Events</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="registrationform.php">Event Registration</a>
              <a class="dropdown-item " href="eventpage.php">All Events</a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

       <button type="button" target class = "btn btn-success" style = "color: #2eca6a; ">
        <a href="./login.php" style = "color:white;" >Login</a>
        
      </button> 

    </div>
  </nav>


</head>

<body>

 


 

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
    <?php 
            while($info=$result3->fetch_assoc()){
            ?>
      <div class="swiper-slide carousel-item-a intro-item bg-image"  alt="" class="img-b img-fluid">
      <img src="<?php echo "{$info['image']}"?>" alt="" class="swiper-slide carousel-item-a intro-item bg-image"  class="img-b img-fluid">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   
                    <h1 class="intro-title mb-4 ">
                    <?php echo "{$info['description']}"?></a>
                      
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="https://vpt.edu.in/diploma/polytechnic/index.html"><span class="price-a">Website</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php  
          }
            ?>

    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
        
          <div class="col-md-12">
          
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">TechShala</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">TechTalk</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Tech Talk aims to research and discover ideas worth spreading.


Tech Talk is organized for Vidyalankar Polytechnic students and faculties who seek to uncover new ideas, wants to share their latest research and information about latest technological trends in their domain.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="eventpage.php" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Hackathon</h2>
                </div>
              </div>
              <div class="car-body-c">
                <p class="content-c">
                  A hackathon is a competitive event in which a team of designers, developers, and subject matter experts collaborate to create solutions for a specific problem within a defined time frame. The goal is to build a working prototype, in the form of a website, an app, or a robot, to solve a given problem.


Also known as a “Hackfest” or a “Hack day,” the event gives participants the opportunity to network, collaborate, and productize their ideas. 
                </p>
              </div>
              <div class="card-footer-c">
                <a href="eventpage.php" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

  

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Event Gallery</h2>
              </div>
              <div class="title-link">
                <a href="about.html">About
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">
          <?php 
            while($info=$result->fetch_assoc()){
            ?>
            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="<?php echo "{$info['image']}"?>" style="height: 400px;" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="about.html" class="category-b">TechShala</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="about.html">
                          <br> <?php echo "{$info['name']}"?></a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"><?php echo "{$info['date']}"?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          <?php  
          }
            ?>

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

    
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
                <a href="eventpage.php">Event</a>
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