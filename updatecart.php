<?php
session_start();
include_once('classes/customer.php');
if (isset($_POST['update_cart_item'])){
	$update = new Customer();
	$newquantity=$update->updateCart($_POST['ucustid'],$_POST['update_cart_item'],$_POST['uq'],'json/addtocart.json');  
	//updateCart($customerid,$productid,$quantity,$cartfile)
	// if ($newquantity == true){
	// 	echo "Item quantity update success";
	// }else{
	// 	echo "try again";
	// }
}else if (isset($_POST['remove_cart_item'])) {
	$remove = new Customer();
	$data=$remove->removeCart($_POST['custid'],$_POST['remove_cart_item'],'json/addtocart.json');
	unset($_SESSION['pcode']);
	// if ($data == true){
	// 	echo "Item remove in your cart";
	// }else{
	// 	echo "try again";
	// }
	//removeCart($customerid,$productid,$cartfile)
}

?>