<?php
session_start();
include_once('classes/customer.php');
if (isset($_POST['c_login'])) {
	$arr=array("username"=>$_POST['username'],"password"=>$_POST['password']);

$newcustomer = new Customer();
$callback = $newcustomer->customerLogin($arr,'json/customers.json');
 if ($callback == false) {
 	echo 0;
 }else{
 	$_SESSION['i']=$callback['id'];
 	$_SESSION['n']=$callback['name'];
 	echo $callback;
 }

}
?>