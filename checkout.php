<?php
session_start();
?>

<html>

  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
    
<form action="purchasesuccess.php" method='post' target="productandcheckoutview">
    
<table>
    
<tr>
<th width='50%'></th>
<th width='50%'></th>
</tr>

<tr>
<td>Name</td>
<td><input type="text" id="name" name="name" required></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" id="address" name="address" required></td>
</tr>

<tr>
<td>Suburb</td>
<td><input type="text" id="suburb" name="suburb" required></td>
</tr>

<tr>
<td>State</td>
<td><input type="text" id="state" name="state" required></td>
</tr>

<tr>
<td>Country</td>
<td><input type="text" id="country" name="country" required></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" id="email" name="email" required></td>
</tr>

</table> 

<div class=grid-content><input type='submit' class=happybutton  value='Purchase'></div>
  
</form> 

</body>
</html> 

