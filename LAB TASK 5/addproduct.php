<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<H1><b>ADD PRODUCT<b></H1>
 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>

  <label for="sellingprice">Selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <hr>

  <input type="checkbox">&ensp; Display
  <hr>
  <br>
  <input type="submit" name = "createProduct" value="save">
  <input type="radio" name="Display" herf=showALLProducts.php> Display <br>
  
</form> 

</body>
</html>