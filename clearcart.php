<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<html>


<?php 
session_start();
unset($_SESSION['cart']); 
session_destroy();

echo "<div class='grid-content'><p class='text'>No products in cart.</p></div>";


exit();
?>


