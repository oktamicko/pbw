<!DOCTYPE html>
<html>
<head>
	<title>Aritmatika</title>
</head>
<body>
	<form method="GET" action="aritmatika.php">
		<input type="number" name="bil1" <?php if (isset($_GET['bil1'])) {
			echo 'value="'.$_GET['bil1'].'"';
		} ?>>
		<select name="opr">
			<option <?php if (isset($_GET['opr']) && $_GET['opr'] == '+') echo 'selected' ?>>+</option>
			<option <?php if (isset($_GET['opr']) && $_GET['opr'] == '-') echo 'selected' ?>>-</option>
			<option <?php if (isset($_GET['opr']) && $_GET['opr'] == 'x') echo 'selected' ?>>x</option>
			<option <?php if (isset($_GET['opr']) && $_GET['opr'] == '/') echo 'selected' ?>>/</option>
		</select>
		<input type="number" name="bil2" <?php if (isset($_GET['bil2'])) {
			echo 'value="'.$_GET['bil2'].'"';
		} ?>>
		<input type="submit" name="sub" value="=">
		<?php
		include 'pustaka.php';

		if (isset($_GET['sub']) && strlen($_GET['bil1']) && strlen($_GET['bil2'])){
			$rslt= aksiOperasi($_GET['bil1'],$_GET['bil2'],$_GET['opr']);
			echo $rslt;
			$log=$_GET['history']."<br>".$_GET['bil1']." ".$_GET['opr']." ".$_GET['bil2']." = ".$rslt;
			
		}
		?>
		

		<input type="hidden" name="history"
			<?php
				if (isset($_GET['sub'])){
					echo 'value="'.$log.'"';
				}
			?>
		>
	</form>
	<h2>Log Perhitungan</h2>
	<?php
		if (isset($_GET['sub'])){
			echo $log;
		}
	?>
</body>
</html>
