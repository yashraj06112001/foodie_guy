<?php
echo "now its time to get everything <br>";
session_Start(); 
$food_item= $_SESSION['food_item'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $phone_number=$_POST['phone_number'];
    $address=$_POST['address'];
    $food_item=$_SESSION['food_item'];
    $servername="localhost";
    $username="root";
    $password="";
    $database="hotel";
    $conn=mysqli_connect($servername,$username,$password,$database);
   $sql2="INSERT INTO `food_data` (`NAME`, `PHONE_NUMBER`, `address`, `food`) VALUES ('$name', '$phone_number', '$address', '$food_item')";
   
    $res2=mysqli_query($conn,$sql2);
    echo "so Mr.".$_POST['name']."your order of ".$_SESSION['food_item']." will be dilievered soon"; 
}

?>