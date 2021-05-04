<?php
//inheritance
 class Father
{
  function bike()
	{
		echo "<br>dad's bike";
	}
	function home()
	{
		echo "</br>dad's home";
	}
}
class child extends Father{
	function car()
	{
		echo "BMW";
	}
}
$ob=new child();
$ob->car();
$ob->bike();

?>