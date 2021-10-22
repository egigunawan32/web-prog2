<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<title>output</title>
</head>

<style>
	fieldset{
		width: 40%;
		margin: 20px auto;
		border-radius: 5px;
	}

	select {
		width: 100%;
	}
</style>

<body>
	<fieldset>
		<legend>output transaksi</legend>

			<table>
				<tr>
					<th>Nama Pembeli</th>
					<td>:</td>
					<td>
						<?= $nama; ?>
					</td>
				</tr>

				<tr>
					<th>Nomor HP</th>
					<td>:</td>
					<td>
						<?= $nhp; ?>
					</td>
				</tr>

				<tr>
					<th>MERK SEPATU</th>
					<td>:</td>
					<td>
						<?= $merk; ?>
					</td> 
				</tr>

				<tr>
					<th>UKURAN SEPATU</th>
					<td>:</td>
					<td>
						<?= $ukuran; ?>
					</td>
				</tr>

				<tr>
					<th>total harga</th>
					<td>:</td>
					<td>
						<?= $harga; ?>
					</td>
				</tr>

				<tr>
					<td colspan="3" align="center">
						<hr>
						<a href="<?= base_url('Sepatu'); ?>">kembali</a>
					</td>
				</tr>
			</table>
	</fieldset>

</body>
</html>