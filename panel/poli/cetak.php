<!DOCTYPE html>
<html>
<head>
<title>Daftar Poli Puskesmas</title>
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
	<th>Nama Poli</th>
	<th>Kode Poli</th>
</tr>
<?php 
 // koneksi database
include('../../Control.php'); 

 // menampilkan data pegawai
 $data = mysqli_query($mysqli,"select * from poliklinik");
while($d = mysqli_fetch_assoc($data)){
?>
<tr>
<td><?= $d['poli'] ?></td>
<td><?= $d['kodeplk'] ?></td>
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