<?php
	session_start();
	$_SESSION["keranjang"] = [];
	header("Location: kasir.html");
?>