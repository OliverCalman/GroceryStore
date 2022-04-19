<?php
session_start();
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
    
<p class=grid-content>Your purchase was successful.</p>
<form action='clearcart.php' id='clearcart' method='post' target='cartview' ></form>

<script>
  document.getElementById('clearcart').submit();
</script>

</body>
</html> 
