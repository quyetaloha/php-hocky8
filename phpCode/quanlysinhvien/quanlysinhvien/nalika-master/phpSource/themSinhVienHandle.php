<?php
require_once ("databaseConnection.php");
$hoten=$_POST["hoten"];
$truong=$_POST["truong"];
$chuyennganh=$_POST["chuyennganh"];
$namtotnghiep=$_POST["namtotnghiep"];
$chungchi=$_POST["chungchi"];
$email=$_POST["email"];
$diem=$_POST["diem"];
$vitri=$_POST["vitri"];
//$sql="UPDATE sinhvien set hoten='".$hoten."',truong='".$truong."' where idsinhvien=10";
$sql="insert sinhvien (hoten,truong,chuyennganh,namtotnghiep,chungchi,email,diem,vitriungtuyen) values(N'".
    $hoten."',N'".$truong."',N'".$chuyennganh."',N'".$namtotnghiep."',N'".$chungchi."',N'".$email."',N'".$diem."',N'".$vitri."')";
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Thêm thành công";
} else {
    echo "Thêm thất bại: " . $conn->error;
}

header( 'Location: ../nalika/themSVThanhCong.php' );