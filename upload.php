<?php
$target="This PC:/";
$target_path=$target.basename($_FILE['filetouplode']['name']);
if(move_uploaded_file($_FILE['filetouplode']['tmp_name'], $target))
{
	echo "file to uplode suessfully";
}
else{
	echo "file not uplode";
}


?>