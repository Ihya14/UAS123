<?php
	session_start();
	$namabarang=$_GET['namabarang'];
	$jumlah=$_GET['jumlah'];
	$harga = 0;
	if($namabarang=="Qtela")$harga=15000;
	if($namabarang=="Chitato")$harga=27000;
	if($namabarang=="Piattos")$harga=9900;
	if($namabarang=="Potabee")$harga=9500;
	if($namabarang=="Kusuka")$harga=14500;
	if($namabarang=="Tictac")$harga=6500;
	$_SESSION["keranjang"][] = ["namabarang" => $namabarang, "harga" => $harga, "jumlah" => $jumlah];
	header("Location: kasir.html");
?>