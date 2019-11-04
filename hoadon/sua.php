
<?php

	$conn=mysqli_connect("localhost","root","","smartshop") or die ("loi ket noi sql");
	$id = $_GET['id'];

    $result = $conn->query("select * from `order` where id = " . $id);

    $rs = $result->fetch_assoc();
   // print_r($rs);
?>
 <h1>Cập nhật hóa đơn</h1>
 <form action="xlsua.php" method="post">
 	<!-- id: <input type="text" name="id" value="<?php echo $rs['id'];?>"><br> -->
 	<!-- idUser: <input type="text" name="idUser" value="<?php echo $rs['idUser'];?>"><br> -->
 	<input type="hidden" name="id" value="<?php echo $id; ?>">
 	dia chi: <input type="text" name="diaChi" value="<?php echo $rs['diaChi'];?>"><br>
 	ngay lap : <input type="text" name="ngayLap" value="<?php echo $rs['ngayLap'];?>"><br>
 	tong gia: <input type="text" name="tongGia" value="<?php echo $rs['tongGia'];?>"><br>
 	so luong: <input type="text" name="soLuong" value="<?php echo $rs['soLuong'];?>"><br>
 	<input type="submit" value="Sửa" >
 </form>