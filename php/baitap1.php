<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="DsSanPham.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>User:</label></td>
				<td><input type="text" name="user" ></td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td><input type="text" name="password" ></td>
			</tr>
		</table>
		<button type="submit" name="dangnhap">Đăng nhập</button>
	</form>
	<!-- <?php 
		if($_POST['dangnhap']){
			session_start();
			$_SESSION['user']=$_POST['user'];

		}
	 ?> -->
</body>
</html>