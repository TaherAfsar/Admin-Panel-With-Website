<?php


    $host = "localhost";
    $user = "root";
    $password = "";
    $db ="techshala";
    $data = mysqli_connect($host,$user,$password,$db);

    $sql = "SELECT *FROM eventpage"; 
    $result = mysqli_query($data,$sql);
    
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
  <link href="/" rel="icon">
  <link href="/" rel="apple-touch-icon">

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
            <a class="nav-link " href="about.html">About</a>
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
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <style>
   
.section {
    padding: 90px 0;
}
article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
*, ::after, ::before {
    box-sizing: inherit;
}
user agent stylesheet
section {
    display: block;
}
body {
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
}
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}
</style>

</head>
<body>
<section class="section contact-form">
	<div class="container">
    <?php 
            while($info=$result->fetch_assoc()){
            ?>
		<div class="row">
			
			<div class="col-lg-9 col-md-6 align-self-left ml-lg-auto">
            
				<div class="content-block">
					<br/>
					<h2><?php echo "{$info['title']}"?></h2>
					<br/>
					<div class="description-one">
                    <?php echo "{$info['tdesc']}"?>
					</div>
				</div>	
			</div>	

		</div>
		<div class="row">	
			<div class="col-lg-12 col-md-12 align-self-left ml-lg-auto">
				<div class="content-block">
					<br/>
					<h4><span class="alternate">Instructions</span></h4>
					<div class="description-one">
					<p>
                    <?php echo "{$info['idesc']}"?>
                    </p>
					</div>
					<h5><span class="alternate">Timing</span></h5>
						<div class="description-one">
							
                            <?php echo "{$info['timing']}"?>
                            
						</div>
					<br/>
					<h5><span class="alternate">Organising Committe</span></h5>
						<div class="description-one">
                        <?php echo "{$info['ocom']}"?>
						</div>
					<br/>
					<h5><span class="alternate">Faculty Co-ordinators</span></h5>
						<div class="description-one">
                        <?php echo "{$info['faculty']}"?>
						</div>
					<br/>
					<h5><span class="alternate">Mentor</span></h5>
						<div class="description-one">
                        <?php echo "{$info['mentor']}"?>
						</div>
					<br/>
					<h5><span class="alternate">Technical Head</span></h5>
						<div class="description-one">
                        <?php echo "{$info['thead']}"?>
						</div>
					<br/>	
					
				</div>
			</div>
		</div>
	
	</div>
    <?php
             } ?>
</body>
</section>
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
</html>