<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if(isset($_SESSION['user'])&&isset($_SESSION['pass'])){
		echo ("Tên truy nhập: ".$_SESSION['user']."</br>");
		echo ("Mật khẩu: ".$_SESSION['pass']);
	}
	else
		echo "SESSION không tồn tại";
	 ?>
	<br>
	<a href="session.php">Trở về trang cookie</a>
	<a href="deletesession.php">Hủy cookie</a>
</body>
</html>