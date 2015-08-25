<?php 
session_start();
//if $_POST['update'] has a value $_SESSION['shoppingcart'] gets that value.
if(isset($_POST['update'])){
	$_SESSION['shoppingcart'] = $_POST['update'];
}else{
}
 ?>
