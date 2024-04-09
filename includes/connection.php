<?php
$servername="localhost";
$username="root";
$password="root";
$db_name="mystore";
$con=mysqli_connect($servername,$username,$password,$db_name);
if($con){
    echo("");
}
else{ 
    die(mysqli_error($con));
}
?>


