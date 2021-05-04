<?php
//interface
 interface Father{
 	public function add();
 }
 interface Mother{
 	public function mul();
 }

 class child implements father,mother
{
	public function add()
	{
		echo "<br/>addition....";
	}
	public function mul()
	{
		echo "<br/>multiplication...";
	}
	public function div()
	{
		echo "<br/>division...";
	}
  }
  $obj=new child;
  $obj->add();
  $obj->mul();
  $obj->div();
?>