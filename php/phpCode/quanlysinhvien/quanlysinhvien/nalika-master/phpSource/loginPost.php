<?php
require_once ("../phpSource/databaseConnection.php");
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
echo $username." ".$password;

$sql = 'SELECT * FROM USER';
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result);
$checklogin=0;
foreach ($row as $item){
    global $checklogin;
    echo $item[1]." ".$item[2]."<br>";
    if($item[1]==$username&&$item[2]==$password) {
        $checklogin=1;
        echo "Dang nhap thanh cong";
        $_SESSION['checklogin']="true";
        $_SESSION['username']=$username;
        $_SESSION['idsohuu']=$item[4];
        //$_SESSION['quyen']=$item[3];
        if($item[3]=="admin")
            header( 'Location: ../nalika/index-admin.php' );
        if($item[3]=="sinhvien") {

            header('Location: ../nalika/sinhvien/index-sinhvien.php');
        }
    }
}
if($checklogin==0){
    header( 'Location: ../nalika/login.html' );
}

