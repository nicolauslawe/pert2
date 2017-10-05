<?php

		echo "<h1>Add Dosen</h1>";
		$row ['kode_dosen'] = "";
		$row ['nama'] = "";
		$row ['id'] = "";

?>

<form action = "proses_dosen.php?action=<?php echo $_GET['action']; ?>" method="post">
	Kode Dosen:
	<input type="text" name="kode_dosen" value=""/>
	<br/>
	Nama Dosen:
	<input type="text" name="nama" value=""/>
	<br/>
	<input type="hidden" name="id" value="" />
	<input type="submit" name="submit" />
</form>
