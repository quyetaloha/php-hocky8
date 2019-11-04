<?php

	
	$id = $_POST['id'];
	$idUer = $_POST['idUser'];
	$dc = $_POST['diaChi'];
	$ngay = $_POST['ngayLap'];
	$tong = $_POST['tongGia'];
	$sl = $_POST['soLuong'];

$conn=mysqli_connect("localhost","root","","smartshop") or die ("loi ket noi sql");
	$sql ="UPDATE `order` SET  diaChi='$dc',ngayLap='ngay',tongGia='$tong',soLuong='$sl' WHERE id ='$id' " ;
	$rs=mysqli_query($conn,$sql);
	print_r($rs);
	if($rs){
	 	 header("location:danhsachhoadon.php");
	}



?>