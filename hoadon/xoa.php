<?php

	$conn=mysqli_connect("localhost","root","","smartshop") or die ("loi ket noi sql");
	$id = $_GET['id'];
	$sql ="DELETE FROM `order` WHERE id=".$id ;
	$rs=mysqli_query($conn,$sql);
	
	if($rs){
	 	 header("location:danhsachhoadon.php");
	}



?>