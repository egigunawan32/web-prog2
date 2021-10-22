<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1.0">
	<title>input</title>
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
		<legend>input transaksi</legend>

		<form method="post">
			<table>
				<tr>
					<th>Nama Pembeli</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
						<?= form_error('nama', '<br><span style="color:red;">', '</span>'); ?>
					</td>
				</tr>

				<tr>
					<th>Nomor HP</th>
					<td>:</td>
					<td>
						<input type="text" name="nhp" id="nhp">
						<?= form_error('nhp', '<br><span style="color:red;">', '</span>'); ?>
					</td>
				</tr>

				<tr>
					<th>MERK SEPATU</th>
					<td>:</td>
					<td>
						<select name="merk" id="merk">
							<option>--- PILIH ---</option>
							<?php foreach($merk as $m) : ?>
								<option value="<?= $m; ?>"><?= $m; ?></option>
							<?php endforeach; ?>
					</td> 
				</tr>

				<tr>
					<th>UKURAN SEPATU</th>
					<td>:</td>
					<td>
						<select name="ukuran" id="ukuran">
							<option>--- PILIH ---</option>
							<?php foreach($ukuran as $u) : ?>
								<option value="<?= $u; ?>"><?= $u; ?></option>
							<?php endforeach; ?>
					</td>
				</tr>

				<tr>
					<td colspan="3" align="center">
						<hr>
						<button type="submit">submit</button>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>

</body>
</html>