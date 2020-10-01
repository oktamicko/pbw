<h2>FORM ISIAN DATA BARU</h2>
<form>
	Nama : <input type="text" name="nm">
	<input type="submit" name="sub" value="Simpan Data Baru">
	<input type="submit" name="sub" value="Kembali ke Tampil Data">
	<?php 
		if (isset($_GET['sub'])){
			if($_GET['sub']=="Kembali ke Tampil Data"){
				header("location:01_TampilData.php");
			}else{
				if (strlen(isset($_GET['nm']))) {
					include "koneksi.php";
					mysqli_query($kon,"INSERT INTO `mahasiswa` (`id`, `nama`) VALUES (NULL, '".$_GET['nm']."');");
					echo "<br>Data <b>".$_GET['nm']."</b> telah disimpan ke database!";
				} else {
					echo "<br>Data nama tidak boleh kosong!";
				}
			}
		}
	?>
</form>