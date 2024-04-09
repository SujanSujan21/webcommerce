<?php
  include '../includes/connection.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link href="bootstrap.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/css/sstyle.css">
</head>
<body>
    <br>
    <div class="container">
        <section class="display_product">
            <table>
                <thead>
                    <th>SI.No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <!-- php Code -->

                    <?php 
                        $display_product=mysqli_query($con,"Select * from `products`");
                        if(mysqli_num_rows($display_product)>0){
                            //logic to fetch data
                          while($row=mysqli_fetch_assoc($display_product)){
                            
                          
                    ?>

<!--Display Table -->
<tr>
                        <td><?php echo $row['product_id'] ?></td>
                        <td><img src="./product_images<?php echo $row['product_image1']?>"alt =<?php echo $row['product_title'] ?>></td>
                        <td><?php echo $row['product_title'] ?></td>
                        <td><?php echo $row['product_price'] ?></td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['product_id']?>" class="delete_product_btn"
                             onclick="return confirm('Sujan are you sure you wanna delete this product ?');" >Delete</a>
                            
                        </td>
                    </tr>                              

                            <?php

                          }
                            
                        }else{
                            echo "No Products Available";
                        }
                    
                    ?>

                    </tr>
                </tbody>
            </table>

        </section>
    </div>
    
</body>
</html>