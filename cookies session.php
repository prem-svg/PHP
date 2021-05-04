<?php
setcookie("user","azhar");
setcookie("user","",time()-1);
session_start();
?>
<html>
<body>
	<?php
if(!isset($_COOKIE['user'])){
	echo "sorry cookie is not set";
}
else{
	echo "cookie sucessfully set".$_COOKIE['user'];
}
	?>
	<?php
	$_SESSION['USER']="AZHAR";
	echo "session information are set suessfully</br>";
	?>
	<a href="firstphp.php">check file</a>
	</body>
</html>