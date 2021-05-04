<?php
//parameterazied constructor
class person{
	public $name;
	public $age;
	function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
	} 
	function get(){
		echo $this->name."<br>";
		echo $this->age."<br>";
	}
	function __destruct(){
		echo "<br>{$this->name} {$this->age} <br> is destroyed";
	}
}
$obj1=new person("ABC <br>",20);
$obj1->get();
$obj2=new person("XYZ <br>",21);
$obj2->get();
$obj3=new person("PQR <br>",25);
$obj3->get();



//parameterazied constructor
class person1{
	public $age;
	function __construct(){
		$this->age=24;
	} 
	function get(){
		echo $this->age;
	}
}
$obj=new person1();
$obj->get();
?>