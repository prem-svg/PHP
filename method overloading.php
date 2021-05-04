<?php
class fruit{
public $name;
public $color;
public $weight;
function __construct($name,$color){
	$this->name=$name;
	$this->color=$color;
}
function get(){
	echo "the fruit name is : " .$this->name. " and color is : " . $this->color;
}
}
class strawbarry extends fruit{
	function __construct($name,$color,$weight){
		parent::__construct($name,$color);
		$this->weight=$weight;
}
function get(){
	echo parent::get()."<br>the fruit weight is : ".$this->weight;
	}
}
$s=new strawbarry("mango","yellow",10);
$s->get();

?>