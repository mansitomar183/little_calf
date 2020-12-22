<?php
include_once('classes/customer.php');
if (isset($_POST['c_reg'])) {
	$arr=array("cust_id"=>time(),"name"=>$_POST['name'],"mobile"=>$_POST['mobile'],"password"=>$_POST['password'],"email"=>$_POST['email'],"pincode"=>$_POST['pincode'],"address"=>$_POST['address']);

$newcustomer = new Customer();
$callback = $newcustomer->customerRegistration($arr,'json/customers.json');
 if ($callback == false) {
 	echo 0;
 }else{
 	echo 1;
 }

}
?>