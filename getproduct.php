<?php
//start session, create cart
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

//get query string from index.php
$q = ($_GET['q']);

//connect to mysql
$con = mysqli_connect('localhost','oliver','admin','assignment1');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

//stored query string to retrieve all products
mysqli_select_db($con,"assignment1");
$sql="SELECT * FROM products WHERE product_id IN (".$q.")";
$result = mysqli_query($con,$sql);

if ($q > 0){
//create html table headers
echo "<table class='text'>
<tr>
<th>Product Name</th>
<th>Unit Price</th>
<th>Unit Quantity</th>
<th>Amount In Stock</th>
<th>Select Quantity</th>
<th></th>
</tr>";

//foreach in results print result as a table row
//includes quantity selector and add to cart button
while($row = mysqli_fetch_assoc($result)) {
  
  $product_id = $row['product_id'];
  $product_name = $row['product_name'];
  $unit_price = $row['unit_price'];
  $unit_quantity = $row['unit_quantity'];
  $in_stock = $row['in_stock'];
  
  
echo "<tr>
<td>". $product_name ."</td>
<td id='price' name='price'>$" . $unit_price . "</td>
<td>". $unit_quantity ."</td>
<td>". $in_stock ."</td>
<td><form method='post' action='shoppingcart.php' target='cartview'>
      <input type='number' name='qty' value='1' min='1' max='20'></td>
<td><input type='hidden' name='productname' value='". $product_name ."'>
      <input type='hidden' name='pID' value=". $product_id ." >
      <input type='hidden' name='price' value=". $unit_price .">
      <input type='hidden' name='unitquan' value='". $unit_quantity ."'>
      <input type='submit'class='happybutton' value='Add to cart'>
      </form></td>
</tr>";

}

echo "</table>";
}


mysqli_close($con);
?>




</body>
</html> 