<?php function headerku(){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Epoli</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="navop" style="background: #00aa9d">
	<div class="konten">
			<h2 class="kiri">&#9630; Sistem Informasi Puskesmas </h2>
			<a href="logout.php" class="kanan">Logout</a>
	</div>
</div>

<div class="sideop">
	<div class="konten">
		<a href="panggil.php">&#9745; panggil</a>
		<a href="pasien.php">&#9855; Registrasi Pasien</a>
		<a href="index.php">&#9776; Pendaftaran</a>
		<a href="dafpasien.php">&#9745; Lihat Daftar</a>
		<a href="dokter.php">&#9739; Dokter</a>
	</div>
</div>

<?php } ?>
	

<?php function footerku(){ ?>
<div class="footerop" style="background: #00aa9d">
	<center>&copy; Beni Basuki | Sistem Informasi Poliklinik</center>
</div>
</body>
</html>
<?php } ?>
