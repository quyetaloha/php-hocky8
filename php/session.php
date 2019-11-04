<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$_SESSION['user']=$_POST['user'];
		$_SESSION['pass']=$_POST['pass'];
		header("location:showsession.php");
	}
	 ?>
</body>
</html>