<?php 
session_start();
//if $_POST['update'] has a value $_SESSION['shoppingcart'] gets that value.
if(isset($_POST['update'])){
	$_SESSION['shoppingcart'] = $_POST['update'];
	echo 1;
}else{
	echo 0;
}
print_r($_POST);
	
 ?>