<?php
require_once ("databaseConnection.php");
$id=$_GET["id"];
$sql="select email from sinhvien where idsinhvien=".$id;
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
//mysqli_query($conn,sql);
$to=$row["email"];
$to2="hayquaw3@gmail.com";
$subject="thông báo trúng tuyển";
$message="Xin chào! Bạn đã trúng tuyển vào công ty chúng tôi \n Liên hệ :0328904651 để biết thêm thông tin";

if(mail($to,$subject,$message,"From: hayquaw1@gmail.com")==true){
    ?>
    <div style="height: 200px">
    <h1 style="margin-top: 100px">Đã gửi email thông báo trúng tuyển thành công<h1>
    </div>
<?php
}else{
    echo 'Gửi email thất bại ! Hệ thống bị lỗi!';
};


