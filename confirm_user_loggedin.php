<?php
session_start();
if (isset($_SESSION['i'])) {
	echo 1;
}else{
	echo 0;
}

?>