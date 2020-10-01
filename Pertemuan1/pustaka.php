<?php
function aksiOperasi($a,$b,$o){
	switch ($o) {
		case '+':
			$hsl=$a+$b;
			break;
		case '-':
			$hsl=$a-$b;
			break;
		case 'x':
			$hsl=$a*$b;
			break;
		case '/':
			$hsl=$a/$b;
			break;
	}
	return $hsl;
}
?>