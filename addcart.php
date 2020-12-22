<?php
session_start();
if (isset($_POST['pid'])) {
	include_once('classes/products.php');
	$newcart = new Products();  //addToCart($customer_id,$product_id,$cartprice,$product_file,$toppings,$cartfile,$topping_file)
    
    $check=$newcart->checkProductInCart($_SESSION['i'],$_POST['pid'],$_POST['cartprice'],'json/products.json',$_POST['topping'],'json/addtocart.json');
    if ($check == true) {
    	echo "Your cart update";
    }else if ($check == false) {
    	// if (is_null($_POST['topping']) || empty($_POST['topping'])) {
    	// 	$_POST['topping']="";
    	// }
    	$add=$newcart->addToCart($_SESSION['i'],$_POST['pid'],$_POST['cartprice'],'json/products.json',$_POST['topping'],'json/addtocart.json','json/toppings.json');
			if ($add == true){
				echo "successfully add in cart";
			}else{
				echo "cart add failed";
			}
    }


	
}
?>