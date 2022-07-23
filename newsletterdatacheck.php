<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db ="techshala";
$data = mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("connection error");
}
if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO newsletter(name,email,phone,message) 
    VALUES ('$name','$email' , '$phone' , '$message') ";

    $result = mysqli_query($data,$sql);

    if($result){
        $_SESSION['message'] ="Your application is sent successfully";
        header("location:contact.php");
    }
    else{
        echo "Error occured";
    }
}

?>