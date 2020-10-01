<h2>Data Mahasiswa</h2>
<form action="02_TambahData.php">
	<!-- <input type="text" name="nama"> -->
	<input type="submit" value="Tambah Data Baru!">
</form>

<?php
	include "koneksi.php";
	$r = mysqli_query($kon,"SELECT * FROM mahasiswa");
	$i=1;
	while($brs=mysqli_fetch_assoc($r)){
		// print_r($brs);
		echo "<form action=\"03_aksi.php\">";	
		echo $i++.". ".$brs['nama'];
		echo " &nbsp;&nbsp;&nbsp;<input type='submit' name='aksi' value='Edit'>";
		echo " &nbsp;&nbsp;&nbsp;<input type='submit' name='aksi' value='Hapus'>";
		echo "<p>";
		echo "<input type='hidden' name='id' value='".$brs['id']."'>";
		echo "<input type='hidden' name='nm' value='".$brs['nama']."'>";
		echo "<br>";
		echo "</form>";
	}
?>
