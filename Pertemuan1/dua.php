<?php
class Car {
	function Car(){
		$this->model = "VM";
	}
}

$herbie = new Car();

echo $herbie->model;
?>