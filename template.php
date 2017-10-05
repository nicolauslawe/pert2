<?php
	// filename: template.php
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			#header{background: red;}
			#sidebar{background: orange;}
			#footer{background: green;}
		</style>
	</head>
	<body>
		<div id="header"><h1>Sistem Informasi Kampus</h1></div>
		<div id="sidebar">
			<a href="template.php?page=mahasiswa">Mahasiswa</a> &nbsp&nbsp&nbsp|
			<a href="template.php?page=dosen">Dosen</a>&nbsp&nbsp&nbsp|
			<a href="template.php?page=matakuliah">Matakuliah</a>
		</div>
		<div id="content">
			Ini adalah konten
			<?php include($_GET['page'] . ".php"); ?>
		</div>
		<div id="footer">Footer</div>
	</body>
</html>