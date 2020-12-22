<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include_once('classes/customer.php');
if (isset($_POST['confirm'])) {

if ($_POST['confirm']['paytype'] == 'online') {
	echo 'online';
}else if ($_POST['confirm']['paytype'] == 'cod'){
    $order_json=file_get_contents("json/orders.json");
	$order_arr=json_decode($order_json,true);



	$uid=uniqid();
	$orderid=strtoupper($uid);
    $date=date('Y-m-d');
    $time=date('H:i A');
	$_SESSION['i'];
	$mycart = new Customer();
	$myproducts = $mycart->myCart($_SESSION['i'],'json/addtocart.json');
	
	
	$order_products=array();
	// push complete order 
	array_push($order_arr,array("order_id"=>$orderid,"restaurentid"=>$_POST['confirm']['restaurentid'],"cust_id"=>$_SESSION['i'],"confirm"=>0,"promocode"=>$_POST['confirm']['promocode'],"promodiscount"=>$_POST['confirm']['promodiscount'],"discountprice"=>$_POST['confirm']['discountprice'],"gst"=>$_POST['confirm']['gst'],"total"=>$_POST['confirm']['total'],"paytype"=>$_POST['confirm']['paytype'],"name"=>$_POST['confirm']['name'],"mobile"=>$_POST['confirm']['mobile'],"email"=>$_POST['confirm']['email'],"address"=>$_POST['confirm']['address'],"date"=>$date,"time"=>$time,"products"=>$myproducts));

	
	if (file_put_contents("json/orders.json", json_encode($order_arr))){
		$mycart->removeAllCart($_SESSION['i'],'json/addtocart.json');
		unset($_SESSION['pcode']);
		echo $orderid;
	}
}

}

?>