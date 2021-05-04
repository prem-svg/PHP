<?php
$str="october 4 2017";
echo date('d M y',strtotime($str));
//string now
echo "<br/>";
echo date('d M Y',strtotime('now'));
//making time
echo "<br/>";
echo date('D',mktime(0,0,0,12,10,2021));
//mapping using foreach
// foreach (range(1,7) as $w) {
// 	$week[]=date('l',mktime(0,0,0,10,$w,0));
// }
// echo implode($week,',');
//get date
$now=getdate();
echo '<br>now the time is :'.$now['hours'].':'.$now['minutes'].':'.$now['seconds'].' on '.$now['mday'].':'.$now['mon'].':'.$now['year'];
//format function
echo "<br>the time is : ".date("h : i a d M Y"),mktime(12,20,13,3,10,2017);
?>