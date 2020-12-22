<?php
session_start();
include_once('classes/customer.php');
include_once('adminOrders/classes/restaurentorders.php');
$new = new Restaurentorders();

//$top = $new->myCart($_SESSION['i'],'json/addtocart.json');
//$top= $new->showdetails(1556616134,'json/customers.json');
$top= $new->orders('res401','json/orders.json');
echo "<pre>";
print_r($top);


?>