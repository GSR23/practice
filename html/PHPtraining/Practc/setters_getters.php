<?php

/**
 * Created by PhpStorm.
 * User: konas
 * Date: 12-08-2017
 * Time: 18:47
 */
class car {

	private $car_wheels = 4;
	protected $car_doors = 4;

	function get_details() {
		echo $this->car_wheels;
		echo "<br>";
		echo $this->car_doors;
	}

	function set_details() {
		$this->car_wheels = 10;
		$this->car_doors = 2;
	}
}

$obj = new car();
$obj->set_details();
$obj->get_details();
