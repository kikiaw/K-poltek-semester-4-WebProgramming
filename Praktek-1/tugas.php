<html>
<head>
	<title>CONTOH VARIABEL</title>
	<style>
	
	p{
	color:white;
	text-align:center;
	font-family:algerian;
	}
	table{
	width:280px;
	}
	label{
	<color:black></color:black>;
	}
	</style>
</head>
<body>
<center>
	<form action="data.php" method="post">
	<table>
	<tr>
	<tr bgcolor="black"><td colspan="2"><p>Masukan Data Diri Anda</p></td></tr>
	<td><label>Nama Lengkap:</label></td>
		<td><input name="nama" type="nama" placeholder="Masukan Nama "></td><tr>
	<td><label>Jurusan saya:</label></td>
		<td><input name="jurusan" type="jurusan" placeholder="Masukan Jurusan "></td><tr>
	<td><label>Usia:</label></td>
		<td><input name="usia" type="usia" placeholder="Masukan Usia "></td><tr>
		<td></td>
<td><input name="kirim" type="submit" value="KIRIM"></td>
</tr>
<tr bgcolor="black"><td colspan="2" height="20px"></td></tr>
	</form>
	</center>
</body>
</html>


<?php
$nama="pungky apri wibowo";
$jurusan="Teknik Informatika";
$usia=23;
echo"<h2>HASIL DARI DATA YANG ANDA MASUKAN</h2>";
echo"NAMA: $nama<br>";
echo"JURUSAN: $jurusan<br>";
echo"USIA: $usia";

?>