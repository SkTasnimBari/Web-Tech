<?php 

require_once 'model.php';

function fetchAllProducts(){
	return showallproducts();

}
function fetchProduct($id){
	return showproduct($id);

}
