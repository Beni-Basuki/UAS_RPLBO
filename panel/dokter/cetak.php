<!DOCTYPE html>
<html>
<head>
<title>Daftar Dokter Puskesmas</title>
</head>
<body>
	<style type="text/css">
body{
	font-family: sans-serif;
	}
table{
	margin: 20px auto;
	border-collapse: collapse;
}
table th,
table td{
	border: 1px solid #3c3c3c;
	padding: 3px 8px;
}
a{
	background: blue;
	color: #fff;
	padding: 8px 10px;
	text-decoration: none;
	border-radius: 2px;
}

    .tengah{
        text-align: center;
    }
</style>
<table>
<tr>
	<th>Kode Dokter</th>
	<th>Nama Dokter</th>
	<th>Alamat</th>
	<th>Telepon</th>
	<th>Tarif</th>
</tr>
<?php 
 // koneksi database
include('../../Control.php'); 

 // menampilkan data pegawai
 $data = mysqli_query($mysqli,"select * from dokter");
while($d = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['kodedkt'] ?></td>
<td><?= $d['namadkt'] ?></td>
<td><?= $d['alamat'] ?></td>
<td><?= $d['telepon'] ?></td>
<td><?= $d['tarif'] ?></td>
</tr>
<?php 
}
?>
    </table>
    <script>
window.print();
</script>
</body>
</html