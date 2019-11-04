
<?php
//hiển thị danh sách các mục để lựa chọn cho hiển thị trúng tuyển
$sql="select ten,soluongchitieu from vitri";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result);

?>
<div style="height: 300px;color: #0f0f0f">
    <h1>Lựa chọn vị trí tuyển dụng</h1>
<form style="margin-left: 400px;margin-top: 70px;font-size: 20px;font-weight: bold" action="../nalika/index-admin-list-trungtuyen-kq.php" method="post">
    <select name="vitri" style="width: 300px;height: 40px;background-color: #2b71a8;">
        <?php
        foreach ($row as $item){
        ?>
            <option style="font-weight: bold" value="<?php echo $item[0].".".$item[1]?>"><h3><?php echo $item[0]?></h3></option>
        <?php }?>

    </select>
    <div style="margin-left: 115px;margin-top: 10px">
        <button type="submit" style="width: 70px;height: 40px;background-color: #2b71a8">Xem</button>
    </div>
</form>
</div>
