<?php
include('../includes/connection.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $product_image_folder ='./product_images/'.$product_image1;
    $product_image_folder ='./product_images/'.$product_image2;

    $insert_query=mysqli_query($con,"insert into `products`(product_title,product_image1,product_image2,product_price)
                               values('$product_title','$product_image1','$product_image2','$product_price')")
                                or die("Insert Query failed");
    if($insert_query){
           move_uploaded_file($temp_image1,$product_image_folder);
           move_uploaded_file($temp_image2,$product_image_folder);
           $display_message= "Product inserted successfully";
    }else{
       $display_message= "There is a error in inserting the products ";
    }                            
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <link href="bootstrap.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-light">
        <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action=""method="post"enctype="multipart/form-data">
        <!-- Title -->
        <br>
        <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_title" class="form-label">Product_title</label>
               <input type="text"name="product_title" class="input_fields"placeholder="Insert Product Title"required="required">
        </div>

         <!-- PRICE -->
         <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_price" class="form-label">Product price</label>
               <input type="number"name="product_price"class="input_fields"placeholder="Enter product price"required="required">
        </div>

        <!-- IMAGES -->
        <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_image1" class="form-label">Product image 1</label>
               <input type="file"name="product_image1"class="form-control"placeholder="Enter product image1"required accept="image/png,image/jpg,image/jpeg">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
               <label for="product_image2" class="form-label">Product image 2</label>
               <input type="file"name="product_image2" class="form-control"placeholder="Enter product image2"required="required">
        </div>


        <!-- BUTTON -->
        <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
        </div>
        </form>
        </div>
        
       
</body>
</html>