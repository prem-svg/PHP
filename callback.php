<?php
$s1="HELLO";
$s2="WORLD";
function c1($s1){
	echo $s1." ";
}
function c2($s2){
	echo $s2." ";
}
function display($arg1,$arg2){
	$arg1($arg2);
}
display("c1",$s1);
display("c2",$s2);
?>