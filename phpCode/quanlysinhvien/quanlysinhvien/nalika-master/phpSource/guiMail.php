<?php
require_once ("databaseConnection.php");
//mysqli_query($conn,sql);
$to=$_POST["mailnhan"];
$subject=$_POST["chude"];
$message=$_POST["noidung"];

$kq=mail($to,$subject,$message,"From: hayquaw1@gmail.com");
if($kq){
    ?>
    <div style="height: 200px">
    <h1 style="margin-top: 100px">Đã gửi email thành công tới địa chỉ <?php echo $to?><h1>
    </div>

<?php
}else{
    echo 'Gửi email thất bại ! Hệ thống bị lỗi!' ;
    echo error_get_last()['message'];

};


