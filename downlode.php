<?php
$file_url="data.txt";
header('Content-Type:application/octet-stream');
header("Content-Transfer-Encoding:utf-8");
header("Conent-disposition:attachment;filename=\"".basename($file_url)."\"");
readfile($file_url)

?>