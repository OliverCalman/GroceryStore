<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Online Grocery Store</title>
  </head>
<body>
      <h1>Grocery Store - 32516 Internet Programming</h1>
      <h>Oliver Calman 14155966</h>
    <img id="logo" src=Images\utsLogo.png alt="UTS Logo" class = "topright">

<div class="grid-container">
  <div class="grid-picturemap">

  <!--load image into document and declare picturemaps-->
    <img src="Images\Home.png" alt="Home image" class='img' usemap="#storemap">
    
  <!--picture map on main image-->
    <map name="storemap">
      <area id="area1" shape="rect" coords="6,140,87,180" alt="Frozen Food" onmouseover="show(1)">
      <area id="area2" shape="rect" coords="101,140,183,180" alt="Fresh Food" onmouseover="show(2)">
      <area id="area3" shape="rect" coords="196,140,277,180" alt="Beverages" onmouseover="show(3)">
      <area id="area4" shape="rect" coords="292,140,374,180" alt="Home Health" onmouseover="show(4)">
      <area id="area5" shape="rect" coords="386,140,468,180" alt="Pet Food" onmouseover="show(5)">
    </map>

  <!--picture map for frozen food-->
    <map name="frozenfoodmap">
      <area shape="rect" coords="6,131,87,171" alt="Hamburger Patties" href="getproduct.php?q=1002" target="productandcheckoutview">
      <area shape="rect" coords="101,132,182,172" alt="Fish Fingers" href="getproduct.php?q=1000,1001" target="productandcheckoutview">
     <area shape="rect" coords="61,249,142,289" alt="Fish Fingers 500g" href="getproduct.php?q=1000" target="productandcheckoutview">
      <area shape="rect" coords="155,249,236,289" alt="Fish Fingers 1kg" href="getproduct.php?q=1001" target="productandcheckoutview">
      <area shape="rect" coords="196,132,277,172" alt="Shelled Prawns" href="getproduct.php?q=1003" target="productandcheckoutview">
      <area shape="rect" coords="292,132,373,172" alt="Ice Cream" href="getproduct.php?q=1004,1005" target="productandcheckoutview">
      <area shape="rect" coords="254,248,335,288" alt="Ice Cream 1L" href="getproduct.php?q=1004" target="productandcheckoutview">
      <area shape="rect" coords="348,248,429,288" alt="Ice Cream 2L" href="getproduct.php?q=1005" target="productandcheckoutview">
    </map>

      <!--picture map for fresh food-->
      <map name="freshfoodmap">
        <area shape="rect" coords="5,130,68,170" alt="T Bone Steak" href="getproduct.php?q=3002" target="productandcheckoutview">
        <area shape="rect" coords="74,130,134,170" alt="Cheddar Cheese" href="getproduct.php?q=3000,3001" target="productandcheckoutview">
        <area shape="rect" coords="34,249,115,289" alt="Cheddar Cheese 500g" href="getproduct.php?q=3000" target="productandcheckoutview">
        <area shape="rect" coords="128,249,209,289" alt="Cheddar Cheese 1kg" href="getproduct.php?q=3001" target="productandcheckoutview">
        <area shape="rect" coords="142,130,205,170" alt="Navel Oranges" href="getproduct.php?q=3003" target="productandcheckoutview">
        <area shape="rect" coords="213,130,276,170" alt="Bananas" href="getproduct.php?q=3004" target="productandcheckoutview">
        <area shape="rect" coords="282,130,345,170" alt="Grapes" href="getproduct.php?q=3006" target="productandcheckoutview">
        <area shape="rect" coords="352,130,415,170" alt="Apples" href="getproduct.php?q=3007" target="productandcheckoutview">
        <area shape="rect" coords="420,130,483,170" alt="Peaches" href="getproduct.php?q=3005" target="productandcheckoutview">
      </map>

      <!--picture map for beverages-->
      <map name="beveragemap">
        <area shape="rect" coords="46,135,127,174" alt="Coffee" href="getproduct.php?q=4003,4004" target="productandcheckoutview">
        <area shape="rect" coords="20,245,83,283" alt="Coffee 200g" href="getproduct.php?q=4003" target="productandcheckoutview">
        <area shape="rect" coords="90,245,153,283" alt="Coffee 500g" href="getproduct.php?q=4004" target="productandcheckoutview">
        <area shape="rect" coords="223,136,304,176" alt="Earl Grey Tea Bags" href="getproduct.php?q=4000,4001,4002" target="productandcheckoutview">
        <area shape="rect" coords="160,245,223,289" alt="Earl Grey 25 pack" href="getproduct.php?q=4000" target="productandcheckoutview">
        <area shape="rect" coords="229,245,291,283" alt="Earl Grey 100 pack" href="getproduct.php?q=4001" target="productandcheckoutview">
        <area shape="rect" coords="299,245,362,283" alt="Earl Grey 200 pack"  href="getproduct.php?q=4002" target="productandcheckoutview">
        <area shape="rect" coords="393,135,474,174" alt="Chocolate Bar" href="getproduct.php?q=4005" target="productandcheckoutview">
      </map>

      <!--picture map for home health-->
      <map name="homehealthmap">
        <area shape="rect" coords="7,130,88,169" alt="Bath Soap" href="getproduct.php?q=2002" target="productandcheckoutview">
        <area shape="rect" coords="102,130,183,170" alt="Panadol" href="getproduct.php?q=2000,2001" target="productandcheckoutview">
        <area shape="rect" coords="62,249,143,289" alt="Panadol 24 Pack" href="getproduct.php?q=2000" target="productandcheckoutview">
        <area shape="rect" coords="156,249,237,289"  alt="Panadol 50 Pack" href="getproduct.php?q=2001" target="productandcheckoutview">
        <area shape="rect" coords="197,130,278,170" alt="Washing Powder" href="getproduct.php?q=2005" target="productandcheckoutview">
        <area shape="rect" coords="293,130,374,170" alt="Garbage Bags" href="getproduct.php?q=2003,2004" target="productandcheckoutview">
        <area shape="rect" coords="255,249,336,289" alt="Garbage Bags 10 Pack" href="getproduct.php?q=2003" target="productandcheckoutview">
        <area shape="rect" coords="349,249,430,289"  alt="Garbage Bags 50 Pack" href="getproduct.php?q=2004" target="productandcheckoutview">
        <area shape="rect" coords="388,130,469,170" alt="Laundry Bleach" href="getproduct.php?q=2006" target="productandcheckoutview">
      </map>

      <!--picture map for pet food-->
      <map name="petfoodmap">
        <area shape="rect" coords="102,130,183,169" alt="Bird Food" href="getproduct.php?q=5002" target="productandcheckoutview">
        <area shape="rect" coords="197,130,278,170" alt="Cat Food" href="getproduct.php?q=5003" target="productandcheckoutview">
        <area shape="rect" coords="293,130,374,170" alt="Dry Dog Food" href="getproduct.php?q=5000,5001" target="productandcheckoutview">
        <area shape="rect" coords="255,248,336,288" alt="Dry Dog Food 1kg" href="getproduct.php?q=5000" target="productandcheckoutview">
        <area shape="rect" coords="349,248,430,288"  alt="Dry Dog Food 5kg" href="getproduct.php?q=5001" target="productandcheckoutview">
        <area shape="rect" coords="388,130,469,170" alt="Fish Food" href="getproduct.php?q=5004" target="productandcheckoutview">
      </map>
        
        <img src style="visibility:hidden" class='img' id="img1" usemap>

      <script type = "text/javascript">
          function show(no) {
            var selection = document.getElementById('str')
            if (no == 1){
          document.getElementById('img1').style.visibility = 'visible';
          document.getElementById('img1').src = "Images/FrozenFood.png";
          document.getElementById('img1').useMap = "#frozenfoodmap";
          } else if (no == 2){
          document.getElementById('img1').style.visibility = 'visible';
          document.getElementById('img1').src = "Images/FreshFood.png";
          document.getElementById('img1').useMap = "#freshfoodmap";
          } else if (no == 3){
          document.getElementById('img1').style.visibility = 'visible';
          document.getElementById('img1').src = "Images/Beverages.png";
          document.getElementById('img1').useMap = "#beveragemap";
          } else if (no == 4){
          document.getElementById('img1').style.visibility = 'visible';
          document.getElementById('img1').src = "Images/HomeHealth.png";
          document.getElementById('img1').useMap = "#homehealthmap";
          } else if (no == 5){
          document.getElementById('img1').style.visibility = 'visible';
          document.getElementById('img1').src = "Images/PetFood.png";
          document.getElementById('img1').useMap = "#petfoodmap";
          }
        }
      </script> 

    </div>


    <div class="grid-itemview"><h>Product View</h><br><br>

  <div><iframe class="frame" src="getproduct.php" name="productandcheckoutview"></iframe></div>
      

    </div>


    <div class="grid-shoppingcart"><h>Shopping Cart</h>
      <!--show items currently in shopping cart-->
      
      
      <div><iframe class="frame" src="shoppingcart.php" name="cartview"></iframe></div>
      
    </div> 
  </div>   

</body>

</html>