<?php
$servername="localhost";
$username="root";
$password="";
$database="hotel";
$conn=mysqli_connect($servername,$username,$password,$database);
if($_SERVER['REQUEST_METHOD']=='POST')
{
    @$food_item=$_POST['food_item'];
   session_Start();
  $_SESSION['food_item']=$food_item;
    if(strlen($food_item)>0)
    {
        header("location:address.php");

    }
}


?>