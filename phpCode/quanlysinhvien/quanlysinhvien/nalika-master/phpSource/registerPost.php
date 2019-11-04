<?php
require_once ("../phpSource/databaseConnection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$password2=$_POST["password2"];

if($password2!=$password){
   ?>
    <script> alert("mật khẩu nhập lại không khớp!");window.location.replace("http://localhost:8080/phpcode/quanlysinhvien/nalika-master/nalika/register.html"); </script>
    <?php
}


$sql = "SELECT * FROM USER where username='".$username."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row==null){
    $sql3="select max(idsinhvien) from sinhvien";

    $result=mysqli_query($conn,$sql3);
    $row2=mysqli_fetch_array($result);
    $idsohuu=$row2[0]+1;
    //tao them 1 sinh vien
    $sql4="insert into sinhvien(hoten) value (' ')";
    $resul=mysqli_query($conn,$sql4);


    $sql2="INSERT into USER(username,password,quyen,idsohuu) values('".$username."','".$password."','sinhvien','".$idsohuu."')";
    if($conn->query($sql2)){
        ?>
        <script> alert("Đăng ký tài khoản thành công !");
            window.location.replace("http://localhost:8080/phpcode/quanlysinhvien/nalika-master/nalika/login.html");
        </script>

        <?php
    }
    else echo  "that bai";
}
else{
    ?>
    <script> alert("Tên đăng nhập đã tồn tại");
        window.location.replace("http://localhost:8080/phpcode/quanlysinhvien/nalika-master/nalika/register.html");
    </script>

    <?php

}



