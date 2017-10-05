<?php //filename: proses_mhs.php
	include ("db.php");

	if($_GET['action'] == "add")
	{
		//2. Query
		$query ="INSERT INTO matakuliah (kode_matkul, nama_matkul) VALUES ('$_POST[kode_matkul]', '$_POST[nama_matkul]')";
	}

	mysqli_query ($koneksi, $query);
	
	//REDIRECT ke template.php
	header ('Location: template.php?page=matakuliah');
?>