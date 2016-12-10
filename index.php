<!DOCTYPE html>
<html>
<head>
	<title>PHP Download System</title>
	<meta charset="utf-8">
</head>

<body>
<ul>
	<?php  
	foreach (glob("files/*.*") as $v) {
	$name = basename($v);
	echo '<li><a href="download.php?file='.$name.'">'.$name.'</a></li>';
	}
	?>
</ul>
</body>
</html>