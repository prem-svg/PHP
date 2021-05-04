<?php
trait msg1{
	public function msg1(){
	echo "oops is function!";
}
}
trait msg2{
	public function msg2(){
	echo "oops reduce code duplication";
}
}
class welcome{
	use msg1;
}
class welcome2{
	use msg1,msg2;
}
$obj=new welcome;
$obj->msg1();
echo"</br>";
$obj2=new welcome2;
$obj2->msg1();
$obj2->msg2();
?>