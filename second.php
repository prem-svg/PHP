<?php
$name=array("prem","prasath","ramu");
#echo count($name)."<br/>";
foreach($name as $s)
	echo"$s<br/>";
$rev=array_reverse($name);
foreach ($rev as $s) {
	echo "$s</br>";
}
$rev=array_pop($name);
echo"$rev";
$pus=array_push($name,"raja");
echo"<br/>$pus";
//php oops
class Engg{
function msg()
{
	echo "oops in php";
}	
}
$obj=new Engg();
$obj->msg();
//inheritance
final class Father
{
	final function bike()
	{
		echo"dad's bike";
	}
	function home()
	{
		echo"</br>dad's home";
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