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

    $sql = "SELECT *FROM events"; 
    $result = mysqli_query($data,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
   *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Poppins',sans-serif;
   }
   body{
     height: 100vh;
     display: flex;
     justify-content: center;
     align-items: center;
     padding: 10px;
     background:#0b9a47;
   }
   .container1{
       min-width: 100%;
   }
   .container{
     padding:100px;  
     max-width: 700px;
     width: 100%;
     background-color: #fff;
     padding: 25px 30px;
     border-radius: 5px;
     box-shadow: 0 5px 10px rgba(0,0,0,0.15);
     height:100%;
   }
   .container .title{
     font-size: 25px;
     font-weight: 500;
     position: relative;
   }
   .container .title::before{
     content: "";
     position: absolute;
     left: 0;
     bottom: 0;
     height: 3px;
     width: 30px;
     border-radius: 5px;
     background: #0b9a47;
   }
   .content form .user-details{
     display: flex;
     flex-wrap: wrap;
     justify-content: space-between;
     margin: 20px 0 12px 0;
   }
   form .user-details .input-box{
     margin-bottom: 15px;
     width: calc(100% - 20px);
   }
   form .input-box span.details{
     display: block;
     font-weight: 500;
     margin-bottom: 5px;
   }
   .user-details .input-box input{
     height: 45px;
     width: 100%;
     outline: none;
     font-size: 16px;
     border-radius: 5px;
     padding-left: 15px;
     border: 1px solid #ccc;
     border-bottom-width: 2px;
     transition: all 0.3s ease;
   }
   .user-details .input-box input:focus,
   .user-details .input-box input:valid{
     border-color: #0b9a47;
   }
    form .gender-details .gender-title{
     font-size: 20px;
     font-weight: 500;
    }
    form .category{
      display: flex;
      width: 80%;
      margin: 14px 0 ;
      justify-content: space-between;
    }
    form .category label{
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    form .category label .dot{
     height: 18px;
     width: 18px;
     border-radius: 50%;
     margin-right: 10px;
     background: #d9d9d9;
     border: 5px solid transparent;
     transition: all 0.3s ease;
   }
    #dot-1:checked ~ .category label .one,
    #dot-2:checked ~ .category label .two,
    #dot-3:checked ~ .category label .three{
      background: #0b9a47;
      border-color: #d9d9d9;
    }
    form input[type="radio"]{
      display: none;
    }
    form .button{
      height: 45px;
      width: 100px;
    }
    form .button input{
      height: 100%;
      width: 100%;
      border-radius: 5px;
      border: none;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all 0.3s ease;
      background: #0b9a47;
    }
    form .button input:hover{
     /* transform: scale(0.99); */
     background: #0b9a47;
     }
    @media(max-width: 584px){
    .container{
     max-width: 100%;
   }
   form .user-details .input-box{
       margin-bottom: 15px;
       width: 100%;
     }
     form .category{
       width: 100%;
     }
     .content form .user-details{
       max-height: 300px;
       overflow-y: scroll;
     }
     .user-details::-webkit-scrollbar{
       width: 5px;
     }
     }
     @media(max-width: 459px){
     .container .content .category{
       flex-direction: column;
     }
   }
   
      </style>
    <title>Registration Form</title>
  
</head>
<body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form action="registrationdatacheck.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Name</span>
              <input name="name" type="text" placeholder="Enter your name" required>
          
            <div class="input-box">
              <span class="details">Email</span>
              <input name="email" type="text" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
              <span class="details">Roll number</span>
              <input name="rollnum" type="text" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
              <select name="event" id="">
              <option value="Hackathon">Hackathon</option>
  <option value="TechTalk">TechTalk</option>
 
              </select>
              
            </div>
           
          </div>
          
          <div class="button">
            <input type="submit" name="apply" id="submit" value="submit">
          </div>
        </form>
        
            <div class="row">
              <div class="col-md-12">
                <nav class="">
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
                <div class="">
                  <p class="">
                    &copy; Copyright
                    <span class="color-a">VP TechShala</span> All Rights Reserved.
                  </p>
                </div>
                <div class="">
              
                  Designed by <a href="#">Open Source Pundits</a>
                </div>
              </div>
            </div>
          
      </div>
    </div>
    
  </body>
  <footer>
 
  </footer><!-- End  Footer -->

</html>
