<!-- To check user details -->
<?php
session_start();
error_reporting(0);
$host ="localhost";
$user ="root";
$password ="";
$db ="techshala";
$data=mysqli_connect($host,$user,$password,$db);

if($data == false){
    die("Error Occured");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user where username ='".$name."'  and password = '".$password."' ";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    
 
    if($row["usertype"]=="admin"){
        $_SESSION['username'] =$name;
        $_SESSION['usertype'] ="admin";
        header("location:adminhome.php");
    }
    else{
        
       $message ="username and password do not match";
       $_SESSION['loginMessage']=$message;
       header("location:login.php");
    }

}
?>