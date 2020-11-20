<?php  
require_once '../model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingprice'] = $_POST['buyingprice'];
	$data['sellingprice'] = $_POST['sellingprice'];
	

  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
}	 
else {
	echo 'not allowed to access this page.';
}


?>