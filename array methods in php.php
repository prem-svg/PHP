<?php
//array methods
//asort
$details=array('name'=>"prem",'gender'=>"male",'state'=>"tamil nadu");
asort($details);
print_r($details);
echo "<br/>";
//diff
$name1=array("ram","sam");
$name2=array("sam","dom");
$name=array_diff($name1,$name2);
print_r($name);
echo "<br/>";
//explode
 ?>
 <?php
$name="ram,tom,sam";
$fun=explode(",", $name);
print_r($fun);
echo "<br/>";
//implode
$arr=array("ram","tom","sam");
$funn=implode(" and ",$arr);
print_r($funn);
echo "<br/>";
//inarray
echo in_array("ram",$arr);
echo "<br/>";
//intersect
$color1=array('red','green');
$color2=array('green','white');
$colors=array_intersect($color1, $color2);
print_r($colors);
echo "<br/>";
//keyfunction
echo "<br/>";
$namee=array("first"=>"ram","second"=>"sam","third"=>"tom");
echo array_key_exists("second",$namee);
//ksort
echo "<br/>krsort";
krsort($details);
print_r($details); 
//ksort
echo "<br/>";
ksort($details);
print_r($details); 
//merge
echo "<br/>";
$colors=array_merge($color1, $color2);
print_r($colors);
//pop
echo "<br/>";
array_pop($name1);
print_r($name1);
//push
echo "<br/>";
array_push($name1,'raja');
print_r($name1);
//reverse
echo "<br/>";
array_reverse($colors);
print_r($colors);
//rsort
echo "<br/>";
$numbers=array(5,45,56,78,90);
rsort($numbers);
print_r($numbers);
//shift
echo "<br/>";
array_shift($name1);
print_r($name1);
//unshift
echo "<br/>";
array_unshift($name1,"ram");
print_r($name1);
//shuffle
echo "<br/>";
shuffle($colors);
print_r($colors);
//slice
echo "<br/>";
$scli=array_slice($numbers,0,2);
print_r($scli);
//sort
echo "<br/>";
$sclie1=sort($numbers);
print_r($sclie1);
//uniqe
$number1=array(5,45,56,78,90,89,90,89);
$dup=array_unique($number1);
print_r($dup);
//unshift
echo "<br/>";
$names=array('ram','tom','raja');
array_unshift($names, 'samuvel');
print_r($names);
 ?>
