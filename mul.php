<html>
<head>
<title>multiplication table</title>
</head>
<body>
<form method="POST">
ENTER A VALUE
<input type="text" name="number">
<input type="submit" value="Result">
</form>
</body>
</html>
<?php
if($_POST)
{
	$num=$_POST['number'];
	echo"multiplication table of $num is given below<br>";
	for($i=1; $i<=10; $i++)
	{
		echo"$i x $num=",$i*$num;
		echo"<br>";
	}
}
		
?>