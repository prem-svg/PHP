<?php
function divide($a,$b){
	if($b==0){
		throw new Exception("DIVIDE BY ZERO",1);
		}
		else{
			echo "RESULT=".($a/$b);
		}
}
try{
divide(2,0);
}
catch(Exception $obj){
	//echo "DIVIDE BY ZERO";
$C=$obj->getCode();
$m=$obj->getMessage();
$f=$obj->getFile();
$l=$obj->getLine();
echo"the error is occure at".$f;
}
finally{
	echo "process is complete";
}
echo "<br>";
//using oops
class myexception extends Exception{

}
class test{
	function divide($x,$y){
    if($y==0){
    	throw new myexception("divide by zero", 1);
    	
    }
    else{
			echo "RESULT=".($x/$y);
		}
	}
}
$objj=new test();
try{
$objj->divide(2,0);
}
catch(myexception $objj)
{
	echo "divide by zero";
}
finally{
	echo "process is complete";
}


?>