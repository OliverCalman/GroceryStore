<?php 
session_start();
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


//if quantity is 0 do not set any of the values below. Avoids initial creation of an array with a blank key
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

//create session if doesn't already exist
if(!empty($pID)) {
if (!isset($_SESSION['cart'])){
        $_SESSION['cart'][$pID] = array('qty' => $qty, 'price' => $price, 'name' => $productname, 'unitquan' => $unitquan);
}
}

//set array
$cartprices = array();
//get each array from cart
        foreach($_SESSION['cart'] as $name => $array){ 
//get each price from array
              $arrayprice =  $array['price'];
//push price into an array
            //array_push($cartprices, $arrayprice);
            $cartprices[] = $arrayprice;
        }
//summ all parts of array as $total
    $total = array_sum($cartprices);


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

 ?>
 
 <!-- create table headers on page if cart has items -->
 <table class='text'>
 <tr>
 <th>Product Name</th>
 <th>Unit Quantity</th>
 <th>Quantity</th>
 <th>Price</th>
 </tr>
 
<?php
                    
                //iterates through each cart item and displays in table
                foreach($_SESSION['cart'] as $name => $array){ 
                    if($array['qty'] == 0){
                    } else {
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

?>
 
  </table>

  <br>
  <!-- display total value in cart -->
  <div class='rightalign'><h>Cart total: $<?php print_r($total) ?></h></h></div>
  
  
  
  <br><br>
  <div>
    <!-- show buttons to clear cart or checkout -->
  <form action='clearcart.php' method='post' target='cartview' ><input type='submit' class='madbutton' value='Clear Cart'></form>
  <form action='checkout.php' method='post' target='productandcheckoutview'><input type='submit' class='happybutton' value='Checkout'></form>
  </div>
<?php        
   
 } else {
  echo "<div class='grid-content'>No products in cart.</div>";
 }



?>



</body>

<html>