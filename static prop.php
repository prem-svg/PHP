<?php
class car{
static function getname(){
	return "audi";
}
function __construct(){
	echo "car name : ".self::getname();
}
}
$obj=new car();

//when subclass
class cars{
static function getname1(){
	return "BMW";
}
}
class audi extends cars{
function __construct(){
	echo " <br> car name : ".parent::getname1();
}
}
$ob=new audi();
//when using proprty
class bike{
	public static $namee="HONDA";
	function __construct(){
		echo "<br>BIKE NAME IS :".self::$namee;
	}
}
$o=new bike();
//using subclass
class bike1{
	public static $nameee="Hero";
}
class jio extends bike1{
	function __construct(){
		echo "<br>BIKE NAME IS :".parent::$nameee;
	}
}
$o1=new jio();

?>