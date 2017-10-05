<?php

		echo "<h1>Add Matkul</h1>";
		$row ['kode_matkul'] = "";
		$row ['nama_matkul'] = "";
		$row ['id'] = "";
?>

<form action = "proses_matakuliah.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Matakuliah:
	<input type="text" name="kode_matkul" value=""/>
	<br/>
	Nama Matakuliah:
	<input type="text" name="nama_matkul" value=""/>
	<br/>
	<input type="hidden" name="id" value="" />
	<input type="submit" name="submit" />
</form>
