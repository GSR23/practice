<?php
/**
 * Created by PhpStorm.
 * User: konas
 * Date: 12-08-2017
 * Time: 15:29
 */
class car{
	static public $car_doors = 4;  //declaring as static variable
	static protected $car_wheels = 4;        //declaring as static variable
	static function car_details(){  //declaring as static method
	echo "This car has ". car::$car_doors ." doors and " .car::$car_wheels." wheels";

	} 
}
// echoing static variable. no need to instantiate for static variables and methods. here we used class name and scope resolution operator (::).

echo car::$car_doors;
echo "<br>";
echo car::car_details();
