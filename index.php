<!--XII RPL 1_31_SHARFINA FITRIANI PRAYOGA-->
<!DOCTYPE html>
<html>
<head>
	<title>INPUT NILAI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<h2>PENILAIAN MATA PELAJARAN</h2><br>
		<h4>MATA PELAJARAN: </h4>
		<p>Pendidikan agama dan budi pekerti (1)</p>
		<p>Bahasa Indonesia (2)</p>
		<p>Matematika (3)</p>
		<p>Bahasa Inggris (4)</p>
		<p>Teori Kejuruan (5)</p><br>
		<hr>
		<br>
		<form method="POST" action="cek.php">
			<table>
				<tr>
					<td>Kode Mata Pelajaran</td>
					<td> : </td>
					<td>
						<input type="text" name="kodemapel" placeholder="Masukan Kode Mapel">
					</td>
				</tr>
				<tr>
					<td> Nilai </td>
					<td> : </td>
					<td><input type="text" name="nilai" placeholder="Masukan Nilai"></td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="btn" value="Cek">
					</td>
				</tr>
				</table>
		</form>
	</div>
</body>
<footer>Sharfina</footer>
</html>