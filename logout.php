<?php
session_start();
unset($_SESSION['i']);
session_destroy();
?>