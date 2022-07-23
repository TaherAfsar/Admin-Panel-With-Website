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
    $rollnum = $_POST['rollnum'];
    $event = $_POST['event'];

    $sql = "INSERT INTO registration(name,email,rollnum,event) 
    VALUES ('$name','$email' , '$rollnum' , '$event') ";

    $result = mysqli_query($data,$sql);

    if($result){
        $_SESSION['message'] ="Your application is sent successfully";
        header("location:registrationform.php");
    }
    else{
        echo "Error occured";
    }
}

?>