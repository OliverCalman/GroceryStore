<?php 
session_start();
if (!isset($_SESSION['cart'])){
        $_SESSION['cart'][$pID] = array('qty' => $qty, 'price' => $price, 'name' => $productname, 'unitquan' => $unitquan);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
table {
  border-collapse: collapse;
}

table, td, th {
  border-bottom: 1px solid #DDD;
  padding: 10px;
  text-align: left; 
}
</style>
  </head>
<body>
    
<?php

if ( ($_POST['qty'] != 0)){
//load up variables from getproduct form  
$pID = $_POST['pID'];  
$productname = $_POST['productname'];
$qty = $_POST['qty'];
$unitprice = $_POST['price'];
$unitquan = $_POST['unitquan'];
//calculate total value of items added
$price = $unitprice * $qty;
}

//filter null values from array so it doesn't fill up on page load
foreach(($_SESSION['cart'])as $key =>$value )
{
    if(empty($key) or empty($value)){
        unset(($_SESSION['cart'])[$key]);
    }
}


//get total value of all items in cart

/*foreach($_SESSION['cart'] as $k => $v){
    $total = array_sum(array_column($k,'price'));
    echo "<p>". $total . "</p>";
} */

    
echo "<p>". $total . "</p>";



    //does product exist in cart already?
        if (isset($_SESSION['cart'])) {
            if (array_key_exists($pID,$_SESSION['cart'])) {
                // Product exists in cart so update quantity and price
                $_SESSION['cart'][$pID]['qty'] += $qty;
                $_SESSION['cart'][$pID]['price'] += $price;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$pID] = array('qty' => $qty, 'price' => $price, 'name' => $productname, 'unitquan' => $unitquan);
            }
        } 


 if (isset($_SESSION['cart'])) {
     
                foreach($_SESSION['cart'] as $name => $array){ 
                    if(empty($array['name'])){
                        echo "<div class='grid-content'>No products in cart.</div>";
                        exit();
                    } else {
  
 ?>
 
 <table class='text'>
 <tr>
 <th>Product Name</th>
 <th>Unit Quantity</th>
 <th>Quantity</th>
 <th>Price</th>
 </tr>
 
 <?php
                    
                if(is_array($_SESSION['cart'])) {
                foreach($_SESSION['cart'] as $name => $array){ 
                ?>
                    <tr>
                        <td><?php echo $array['name']; ?></td>
                        <td><?php echo $array['unitquan']; ?></td>
                        <td><?php echo $array['qty']; ?></td>
                        <td>$<?php echo $array['price']; ?></td>
                    </tr>
                    
                    <?php
                }
            } 
        }           
    } 
        
?>
 
  </table>
  
  <br>
  <div class='rightalign'><h>Cart total: $<?php ?></h></h></div>
  
  <br><br>
  <div>
  <form action='clearcart.php' method='post' target='cartview' ><input type='submit' class='madbutton' value='Clear Cart'></form>
  <form action='checkout.php' method='post' target='productandcheckoutview'><input type='submit' class='happybutton' value='Checkout'></form>
  </div>
<?php        
        
 } else {
  echo "<div class='grid-content'>No products in cart.</div>";
 }

echo "<pre>";
print_r($_SESSION['cart']);
echo "</pre>";



?>



</body>

<html>