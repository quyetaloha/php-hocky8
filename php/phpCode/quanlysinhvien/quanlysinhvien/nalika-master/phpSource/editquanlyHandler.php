<?php
//Xử lý việc sửa thông tin của người quản lý
require_once ("databaseConnection.php");
echo  $_POST["id"];
$id=$_POST["id"];
$hoten=$_POST["hoten"];
$ngaysinh=$_POST["ngaysinh"];
$diachi=$_POST["diachi"];
$chucvu=$_POST["chucvu"];
//$sql="UPDATE sinhvien set hoten='".$hoten."',truong='".$truong."' where idsinhvien=10";
$sql="UPDATE quanly set hoten=N'".$hoten."',ngaysinh=N'".$ngaysinh."',diachi=N'".$diachi."',chucvu='".$chucvu."' where id=".$id;
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
//mysqli_query($conn,sql);
echo "thanhcong";
//header( 'Location: ../nalika/list-vitri-tuyendung.php' );