<?php  
 //indexed array
$name=array("prem","prasath","raja");
echo"name : $name[0],$name[1],$name[2]";
//assoiicated array
$marks = array('prem' =>"45" ,'prasath' => "86",'prem' =>"90");
echo "</br>prem mark is : ".$marks["prem"]."</br>";
//multidimensional array
$student=array(array(1,"prem",90900090),array(2,"prasath",90964660),array(2,"raja",9435534));
for ($i=0;$i<3;$i++){
for($j=0;$j<3;$j++){
	echo $student[$i][$j];
}
echo"<br/>";
}
//array methods
$name=array("prem","prasath","ramu");
#echo count($name)."<br/>";
foreach($name as $s)
{
	echo"$s<br/>";
}
?>
