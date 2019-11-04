<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
	<form method="POST">
		Tên đăng nhập:
		<input type="text" name="user" value=" "> </br>
		Mật khẩu:
		<input type="text" name="pass" value=" "> </br>
		<input type="submit" name="login" value="Đăng nhập hệ thống">

	</form>
	<?php 
		if(isset($_POST['login'])){
			setcookie('user',$_POST['user'],time()+3000);
			setcookie('pass',$_POST['pass'],time()+3000);
			header("location:showcookie.php");
		}
	 ?>
</body>
</html>