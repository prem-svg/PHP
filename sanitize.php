<?php
$s1="<h1>HELLO WORLD</h1>";
$sa=filter_var($s1,FILTER_SANITIZE_STRING);
ECHO $sa;
$i=100.005;
if((!filter_var($i,FILTER_VALIDATE_INT))===false)
{
	echo "<br>it is integer";
}
else{
	echo "<br>it is not valid integer";
}
//IP address
$ip="127.0.0.1";
if((!filter_var($ip,FILTER_VALIDATE_IP))===false)
{
	echo "<br>it is valid ip adress";
}
else{
	echo "<br>it is not valid ip address";
}
//email
$email="premmm201@gamil.com";
$newmail=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!(filter_var($newmail,FILTER_VALIDATE_EMAIL))===false)
{
	echo "<br>it is valid email id";
}
else{
	echo "<br>it is not valid email id";
}
//RANGE
$int=125;
$min=100;
$max=200;
if(filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))))
{
echo "<br>with in range";
}
else{
	echo "<br>not with in range";
}
?>