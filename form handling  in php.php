<?php
if(isset($_GET['submit']))
{
	echo"hello {$_GET['name']}";
}
?>
<html>
<form method="GET">
enter the number : <input type="text" name="name"/><br/>
<input type="submit" name="submit" value="submit"/>

</form>
</html>