<?php
$a=10;
$b=20;
//arithmetic operator
echo "arithmetic operator";
echo $a+$b."</br>";
echo $a-$b."</br>";
echo $a*$b."</br>";
echo $a%$b."</br>";
echo $a/$b."</br>";
echo $a**$b."</br>";

//assignment operator
echo "</br>assignment operator";
$x=10;
 $x+=100;
echo $x."<br/>";
 $x-=100;
echo $x."<br/>";
 $x*=100;
echo $x."<br/>";
 $x/=100;
echo $x."<br/>";
 $x%=100;
echo $x."<br/>";
//comparison oparator
echo "</br>comparison oparator";
$y=100;
$z=200;
var_dump($y==$z)."<br/>";
var_dump($y===$z)."<br/>";
var_dump($y!=$z)."<br/>";
var_dump($y!==$z)."<br/>";
var_dump($y>$z)."<br/>";
var_dump($y<$z)."<br/>";
var_dump($y<=$z)."<br/>";
var_dump($y>=$z)."<br/>";
var_dump($y<=>$z)."<br/>";
//increment decrement operator
echo "</br>increment decrement oparator";
$x=10;
$y=10;
echo "<br/>".++$x;
echo "<br/>".$x++;
echo "<br/>".--$y;
echo "<br/>".$y--;
//logical operator
echo "</br>logical oparator";
$p=100;
$q=50;
if($p==100 and $q=50){
	echo"<br>and";
}
if($p==100 or $q=80){
	echo"<br>or";
}
if($p==100 xor $q=80){
	echo"<br>xor";
}
if($p !==90){
	echo"<br>not";
}
//concadination
echo "</br>concadination oparator";
$txt1="hello";
$txt2="world";
echo "</br>".$txt1." ".$txt2;
$txt1.=$txt2;
echo "</br>".$txt1;
//array operator
echo"</br>array operator";
$xx=array("a"=>"red","b"=>"green");
$yy=array("c"=>"blue","d"=>"yellow");
print_r($xx+$yy);
var_dump($xx==$yy);
var_dump($xx===$yy);
var_dump($xx!=$yy);
var_dump($xx<>$yy);
var_dump($xx!==$yy);
//conditional operator
echo"</br>conditional operator";
echo $status=(empty($user))? "<br/>anonymous" :"<br/>logged in";
echo"<br/>";
$user="prem";
echo $status=(empty($user))? "<br/>anonymous" :"<br/>logged in";
echo"<br/>";
?>