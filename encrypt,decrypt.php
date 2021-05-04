<?php
$name="prem";
//echo md5($name);
$ss=base64_encode($name);
echo $ss;
$name1="cHJlbQ==";
$sss=base64_decode($name1);
echo $sss;
?>