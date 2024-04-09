<?php

include '../includes/connection.php';
 
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($con,"Delete from `products` where product_id=$delete_id") or die("Query Failed");
    if($delete_query){
        echo "Product Deleted";
        header('location:view_products.php');
    }else{
        echo "Product not deleted";
        header('location:view_products.php');
    }
}
?>