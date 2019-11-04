<!DOCTYPE html>
<html>
<head>
	<title>Bài tập</title>
</head>
<body>
	<form action="" method="POST">
		masv:<br>
		<input type="text" name="msv" id="masv"><br>
		Ho ten: <br>
		<input type="text" name="hoten" id="hoTen"><br>
		ngay sinh:<br>
		<input type="text" name="ngaysinh" id="ngaysinh"><br>
		gioi tinh:<br>
		<input type="text" name="gioitinh" id="gioitinh"><br>
		que quan:<br>
		<input type="text" name="quequan" id="quequan"><br>
		<input type="submit" name="ok" value="gui">
	</form>
	
			<?php 
				$stt = 0;
				if (isset($_POST['ok'])) {
				$stt++;
			?>
			<table border="1px" cellspacing="0">
				<tr>
					<td>STT</td>
					<td>MaSV</td>
					<td>Ho Ten</td>
					<td>Ngay sinh</td>
					<td>Gioi tinh</td>
					<td>Que quan</td>
				</tr>
				<tr>
					<td><?php echo $stt ?></td>
					<td><?php echo $_POST['msv'] ?></td>
					<td><?php echo $_POST['hoten'] ?></td>
					<td><?php echo $_POST['ngaysinh'] ?></td>
					<td><?php echo $_POST['gioitinh'] ?></td>
					<td><?php echo $_POST['quequan'] ?></td>
				</tr>
			</table>
			<?php
				}
			?>
</html>