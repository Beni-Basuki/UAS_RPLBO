<!DOCTYPE html>
<html>
<head>
<title>Daftar Pasien Puskesmas</title>
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
	<th>Kode Pasien</th>
	<th>Nama Pasien</th>
	<th>Alamat Pasien</th>
	<th>Gender Pasien</th>
	<th>Umur Pasien</th>
	<th>Umur Pasien</th>
</tr>
<?php 
 // koneksi database
include('../../Control.php'); 

 // menampilkan data pegawai
 $data = mysqli_query($mysqli,"select * from pasien");
while($d = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['kodepsn'] ?></td>
<td><?= $d['namapsn'] ?></td>
<td><?= $d['alamatpsn'] ?></td>
<td><?= $d['genderpsn'] ?></td>
<td><?= $d['umurpsn'] ?></td>
<td><?= $d['teleponpsn'] ?></td>
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