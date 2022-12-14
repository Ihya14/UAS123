<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Aplikasi Kasir Tokoku</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<?php
		session_start();
		$totalharga = 0;
		foreach($_SESSION["keranjang"] as $key=>$value){
			$totalharga += $value['jumlah'] * $value['harga'];
		}
		$diskon=$totalharga*10/100;
		$hargadiskon=$totalharga-$diskon;
		$ppn=$hargadiskon*0.5/100;
		$bayar=$hargadiskon+$ppn;
	?>

	<div class="container" method="get">
		<div class="tittle">Aplikasi Kasir Tokoku</div>
		<form action="proses.php">
			<div class="user-details">
				<?php foreach($_SESSION["keranjang"] as $key=>$value): ?>
					<div class="input-box">
						<span class="details">Nama Barang</span>
						<div class="base"><?php echo $value['namabarang']?></div>
					</div>
					<div class="input-box">
						<span class="details">Jumlah</span>
						<div class="base"><?php echo $value['jumlah']?></div>
					</div>
					<div class="input-box">
						<span class="details">Harga</span>
						<div class="base"><?php echo "Rp ". number_format($value['harga'])?></div>
					</div>
					<div class="input-box">
					</div>
				<?php endforeach ?>
				<div class="input-box">
					<span class="details">Total Harga</span>
					<div class="base"><?php echo "Rp " .number_format($totalharga)?></div>
				</div>
				<div class="input-box">
					<span class="details">Diskon</span>
					<div class="base"><?php echo "Rp " .number_format($diskon)?></div>
				</div>
				<div class="input-box">
					<span class="details">PPN</span>
					<div class="base"><?php echo "Rp " .number_format($ppn)?></div>
				</div>
				<div class="input-box">
					<span class="details">Bayar</span>
					<div class="base"><?php echo "Rp " .number_format($bayar)?></div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>