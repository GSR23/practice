<?php

class car {

	var $wheel_count = 4;

	var $door_count = 4;

	function car_details() {
		echo "hey I'm BMW and I have" . " " . $this->wheel_count . " " . "wheels";
		echo "</br>";
		echo "hey I'm Honda and I do have" . " same wheels like as bmw i.e. " . $this->wheel_count . " " . "wheels";
	}
}

$bmw = new car();
$honda = new car();
$bmw->car_details();
echo "</br>";
echo "with extra wheel" . " " . $honda->wheel_count = 5;
echo "</br>";
echo "I'm Honda, cheaper than BMW";


?>