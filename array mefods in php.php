<?php
//array methods
//rsort
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
$namee=array("first"=>"ram","second"=>"sam","third"=>"tom");
echo array_key_exists("second",$namee);
 ?>
