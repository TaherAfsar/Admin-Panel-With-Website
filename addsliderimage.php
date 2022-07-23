<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}
$host = "localhost";
$user = "root";
$password = "";
$db ="techshala";
$data = mysqli_connect($host,$user,$password,$db);
if(isset($_POST['add_slider_image'])){
    $description = $_POST['description'];
    $file = $_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;// will store the name
    move_uploaded_file($_FILES['image']['tmp_name'],$dst);
    $sql = "INSERT INTO imageslider (image,description) VALUES('$dst_db' , '$description' ) ";
    $result=mysqli_query($data,$sql);
    if($result){
        header('location:addsliderimage.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Admin dashboard</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
    font-family: 'Poppins', sans-serif;
}
@media  (max-width: 965px) {
   
ul li a{
    
    font-size :0.7rem;
    color: #2eca6a;
    
    font-weight: bold;
    text-decoration: none;
  
      
    }
}
@media(min-width:965px) {
    ul li a{
    
    font-size :1.2rem;
    color: #2eca6a;
    
    font-weight: bold;
    text-decoration: none;
    
}  
}
.header{
    background-color: #2eca6a;;
    line-height: 70px;
    padding-left: 30px;
   
}
.header a{
    text-decoration: none;
}
.logout{
    float: right;
    padding-right: 30px;
}
ul{
    background-color: #000000;
    width: 15%;
    height: 100%;
    position: fixed;
    padding-top: 5%;
    text-align: center;
}
ul li{
    list-style: none;
    padding-bottom: 30px;
    font-size: 15px;
}



ul li a:hover{
    color: #2eca6a;
    text-decoration: none;
}
.content{
    margin-left: 20%;
    margin-top: 5%;
    
}
.formdata{
    border : 5px solid black;
    border-radius :25px;
    width: 30%;
    text-align:left;
    
}
.formdata2{
    padding:10px;
}


    </style>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>



<body>
<header class="header">
        <a href="./adminhome.php"style="color: #000000;">Admin dashboard</a>
        <div class="logout">
            <a href="./logout.php" class="btn btn-primary" style="background-color: #000000;">Log Out</a>
           </div>
    </header>
    <aside>
            <ul>
                <li>
                    <a href="./registrationdata.php">Registration</a>
                </li>
               
                <li>
                    <a href="./admin_add_event.php">Add Event</a>
                </li>
                <li>
                    <a href="./admin_view_event.php">View Events</a>
                </li>
                <li>
                    <a href="newsletterdata.php">Newsletter</a>
                </li>
                <li>
                    <a href="addsliderimage.php">Add Slider Images</a>
                </li>
                <li>
                    <a href="viewsliderimage.php">View Slider Images</a>
                </li>
                <li>
                    <a href="eventpageadddata.php">Add data to event page</a>
                </li>
                <li>
                    <a href="eventpagedataview.php">View data to event page</a>
                </li>
            </ul>
        </aside>
    
    <div class="content">
        <h1>
           
        </h1>
       
    </div> 
       
        <center>
        <h1>
            Add Slider Image
        </h1>
        <br>
        <br>
        <div class="div_deg">
            <form action="#" method="POST" enctype="multipart/form-data" class = "formdata" >
                <div class="formdata2">

                
                <div>
                    <label >Description</label>
                    <input type="text" name = "description">
                </div>
                <br>
              
                <div>
                    <label >Image</label>
                    <input type="file" name = "image">
                </div>
                <br>
                <div>
                    <input type="submit" value="Add Event" name="add_slider_image" class="btn btn-primary" style="background-color: #2eca6a;">
                </div>
                </div>
            </form>
        </div>
        </center>
       
    </div> 
    
</body>
</html>