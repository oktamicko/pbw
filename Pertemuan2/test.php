<form>
	<input type="text" name="nama">
	<input type="submit" name="sub">
</form>

<?php
	if(isset($_GET['nama'])){
		echo $_GET['nama'];
	}
?>