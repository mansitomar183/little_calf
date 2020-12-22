<?php
session_start();
if (isset($_POST['apply_promo'])) {
	$_SESSION['pcode']=$_POST['apply_promo'];
	$_SESSION['pdisc']=$_POST['percent'];
	if (isset($_SESSION['pcode']) && isset($_SESSION['pdisc'])) {
		echo 1;
	}else{
		echo 0;
	}
}

?>