<!--XII RPL 1_31_SHARFINA FITRIANI PRAYOGA-->

<?php 

 $mapel = $_POST["kodemapel"];
 $nilai = $_POST["nilai"];



 if ($mapel == 1) {
 	$namaMapel = "Pendidikan Agama dan Budi Pekerti";
 	if ($nilai >= 75) {
 		$ket = "KOMPETEN";
 	} else {
 		$ket = "TIDAK KOMPETEN";
 	}
 } else if ($mapel == 2) {
 	$namaMapel = "Bahasa Indonesia";
 	if ($nilai >= 80) {
 		$ket = "KOMPETEN";
 	} else {
 		$ket = "TIDAK KOMPETEN";
 	}
 } else if ($mapel == 3) {
 	$namaMapel = "Matematika";
 	if ($nilai >= 80) {
 		$ket = "KOMPETEN";
 	} else {
 		$ket = "TIDAK KOMPETEN";
 	}
 } else if ($mapel == 4) {
 	$namaMapel = "Bahasa Inggris";
 	if ($nilai >= 80) {
 		$ket = "KOMPETEN";
 	} else {
 		$ket = "TIDAK KOMPETEN";
 	}
 } else if ($mapel == 5) {
 	$namaMapel = "Teori Kejuruan";
 	if ($nilai >= 80) {
 		$ket = "KOMPETEN";
 	} else {
 		$ket = "TIDAK KOMPETEN";
 	}
 } else {

 	 echo "<script> 
          alert('TIDAK ADA MAPEL YANG SESUAI!');
          document.location.href = 'index.php';
          </script>";
          exit;		
 }


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil KKM</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: snow;">
		<div class="container">
		<div class="mapel">
			<h1><?php echo $namaMapel; ?></h1>
		</div>
		<div class="nilai">
			<h3 class="text">Nilai Anda</h3>
			<h2 class="hasil"><?php echo $nilai; ?></h2>
		</div>
		<div class="keterangan" style="color: <?php if ($ket === "KOMPETEN") {
			echo "#26d701;";
		} ?>;">
			<?php 
			echo $ket; ?>
		</div>
		<div class="notice">
			<p><?php if ($ket === "KOMPETEN") {
				echo "Selamat, kamu berhasil menyelesaikan mata pelajaran $namaMapel dengan baik!";
			} else {
				echo "Sayang sekali kamu $ket. Segera hubungi guru terkait untuk perbaikan nilai, ya!";
			} ?></p>
		</div>
</div>
</body>
</html>
