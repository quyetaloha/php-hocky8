<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="post.php" method="post">
		Ho ten <input type="text" name="hoten"><br><br>
		Dia chi <input type="text" name="diachi"><br><br>
		<input type="submit" name="gui">
	</form>
	<?php
		if(isset($_POST['gui'])){
			echo "<br> Ho ten= ".$_POST['hoten'];
			echo "<br> Dia chi= ".$_POST['diachi'];

		}
	?>
</body>
</html>