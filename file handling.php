\<?php
$file=fopen('data.txt','w');
fwrite($file,'hello');
fwrite($file,'world');
fclose($file);
echo "file written successfuylly";
?>
