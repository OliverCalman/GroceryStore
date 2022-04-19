     
     
      <!--show item selected in picture map and add to cart-->

      <script>
      var xhttp = new XMLHttpRequest();
      
      function getProduct(str1) {
          if (str1 == "") {
        document.getElementById("productlist").innerHTML = "";
         return;
         } else { 
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("productlist").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "getproduct.php?q="+str1, true);
        xhttp.send();
      }
      }
    </script>

     <!--  <div id="productlist"></div> -->