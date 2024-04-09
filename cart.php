<?php 
include './includes/connection.php';
if(isset($_POST['update_product_quantity'])){
    $update_value=$_POST['update_quantity'];
    //echo $update_value;
    $update_id=$_POST['update_quantity_id'];
   // echo $update_id;

   $update_quantity_query=mysqli_query($con,"update `cart` set quantity=$update_value where id=$update_id");
   echo "Updated Successfully";
}

  if(isset($_GET['remove'])){
      $remove_id=$_GET['remove'];
      //echo $remove_id;
      mysqli_query($con, "Delete from `cart` where id=$remove_id");

  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet"href="./assets/css/sstyle.css">
    <link rel="stylesheet"href="bootstrap.min.css">
</head>
<body>
    
    <div class="container">
<section class="shopping_cart">
    <h1 class="heading">My Cart</h1>
    <table>
        <?php
            $select_cart_products=mysqli_query($con,"Select * from `cart`");
            $num=1;
            $grand_total=0;
            if(mysqli_num_rows($select_cart_products)>0){
                echo" <thead>
                <th>Sl No</th>
                <th>Product Title</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </thead>
            <tbody> ";
            while($fetch_cart_products=mysqli_fetch_assoc($select_cart_products)){
                ?>
                  <tr>
                <td><?php echo $num ?></td>
                <td><?php echo $fetch_cart_products['name']?></td>
                <td><?php echo $fetch_cart_products['image']?></td>
                <td><?php echo $fetch_cart_products['price']?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $fetch_cart_products['id']?>" name="update_quantity_id">
                    <div class="quantity_box">
                    <input type="number" min="1"value="<?php echo $fetch_cart_products['quantity']?>"name="update_quantity"><br><br>
                    <input type="submit" class="update_quantity" value="update"name="update_product_quantity">   
                    </div>
                    </form>
                    </td>
                <td><?php echo  $subtotal=number_format($fetch_cart_products['price']*$fetch_cart_products['quantity'])?></td>
                <td><a href="cart.php?remove=<?php echo $fetch_cart_products['id']?>">Remove</a></td>
            </tr>
        <?php   
        $grand_total=$grand_total+($fetch_cart_products['price']*$fetch_cart_products['quantity']);
        $num++;  
        }
            }else{
                echo "The Cart is Empty !!";
            }
        ?>
        </tbody>
    </table>

    <?php
        if($grand_total>0){
           echo "<div class='table_bottom'>
        <a href='index.php' class='bottom_btn'>Continue Shopping </a>
        <h3 class='bottom_btn'>Grand Total: <span> $grand_total </span></h3>
        <a href='#' class='bottom_btn'> Place the Order</a>
    </div>";
        ?><br><br>
    
    <?php 
    }else{
        echo "";
    }  
    ?>
</section>
    </div>
        
</body>
</html>