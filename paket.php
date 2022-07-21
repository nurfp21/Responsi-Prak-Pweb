<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORM PENGIRIMAN PAKET</title>
	<style type="text/css">
		.container {
			xmin-width: 1000px;
			margin: auto;
			position: relative;
			background-image: url(img/gambar.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">PENGISIAN FORM PENGIRIMAN PAKET </font></strong></div>
			<form name="fform" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Pengirim</td>
						<td><input name="nama_pengirim" type="text" id="nama_pengirim"></td>
					</tr>

					<tr>
						<td>No Telfon</td>
						<td><input name="no_pengirim" type="text" id="nama_pengirim"></td>
					</tr>

					<tr>
						<td>Nama Penerima</td>
						<td><input name="nama_penerima" type="text" id="nama_penerima"></td>
					</tr>

					<tr>
						<td>No Telfon Penerima</td>
						<td><input name="no_penerima" type="text" id="nama_penerima"></td>
					</tr>

					<tr>
						<td>Alamat Pengiriman</td>
						<td><textarea name="alamat" type="text" id="alamat"></textarea></td> </textarea>
					</tr>

					<tr>
						<td>Jarak (KM)</td>
						<td><input name="jarak" type="text" id="jarak"></td> </tr>
					</tr>

					<tr>
						<td><input type="submit" value="Kirim Dan Hitung" onclick="paket()">
					</td>
					</tr>

				</table>
			</form>
			<table>
				
			</table>
	</div>
	<script type="text/javascript">
		function paket() {
			var nama=(document.fform.nama_pengirim.value);
			var no=(document.fform.no_pengirim.value);
			var name=(document.fform.nama_penerima.value);
			var nop=(document.fform.no_penerima.value);
			var alamat=(document.fform.alamat.value);
			var jarak= parseFloat(document.fform.jarak.value);
			var total=jarak*5000;
			alert("Total Pengiriman: " +total+ " Dan Data Sudah Masuk Di txt");
		}
	</script>
</body>
</html>