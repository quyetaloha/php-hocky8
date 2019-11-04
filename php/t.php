<!DOCTYPE html>
<html>
<head>
	<title>Bài tập</title>
</head>
<body>
	<form action="" method="POST">
		<label for="masv" >Mã sinh viên:</label><br>
		<input type="text" name="msv" id="masv"><br>
		<label for="hoTen">Họ và tên: </label><br>
		<input type="text" name="hoten" id="hoTen"><br>
		<label for="diachi">Địa chỉ:</label><br>
		<input type="text" name="diachi" id="diachi"><br>
		<label for="ngaysinh">Ngày sinh:</label><br>
		<input type="text" name="ngaysinh" id="ngaysinh"><br>
		<input type="submit" name="ok" value="Gửi">
	</form>
	
			<?php 
				$mang2=array();
				$stt = 0;
				if (isset($_POST['ok'])) {
				$stt++;
				session_start();
				$mang[]=$_POST['msv'];
				$mang[]=$_POST['hoten'];
				$mang[]=$_POST['diachi'];
				$mang[]=$_POST['ngaysinh'];

				if(isset($_SESSION("ma")){
					
				}
			?>
			<table border="1px" cellspacing="0">
				<tr>
					<td>STT</td>
					<td>Mã sinh viên</td>
					<td>Họ và tên</td>
					<td>Địa chỉ</td>
					<td>Ngày sinh</td>
					
				</tr>
				<tr>
					<td><?php echo $stt ?></td>
					<td><?php echo $_POST['msv'] ?></td>
					<td><?php echo $_POST['hoten'] ?></td>
					<td><?php echo $_POST['diachi'] ?></td>
					<td><?php echo $_POST['ngaysinh'] ?></td>
				</tr>
			</table>
			<?php
				}
			?>
</html>