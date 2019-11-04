<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if(isset($_COOKIE['user'])&&isset($_COOKIE['pass'])){
		echo ("Tên truy nhập: ".$_COOKIE['user']."</br>");
		echo ("Mật khẩu: ".$_COOKIE['pass']);
	}
	else
		echo "COOKIE không tồn tại";
	 ?>
	<br>
	<a href="cookie.php">Trở về trang cookie</a>
	<a href="deletecookie.php">Hủy cookie</a>
</body>
</html>