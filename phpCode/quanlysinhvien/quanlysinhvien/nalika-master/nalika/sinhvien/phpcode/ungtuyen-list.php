<?php

$sql="select ten,noilamviec from vitri";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result);

?>
<div style="height: 300px">
    <h1>Lựa chọn vị trí ứng tuyển</h1>
<form style="color:black;margin-left: 350px;margin-top: 70px;font-size: 20px;font-weight: bold" action="phpcode/ungtuyen-handle.php" method="post">
    <select name="vitri" style="width: 450px">
        <?php
        foreach ($row as $item){
        ?>
            <option style="font-size: 40px;font-weight: bold" value="<?php echo $item[0]?>"><?php echo $item[0]." - ".$item[1]?></option>
        <?php }?>

    </select>
    <br>
    <button type="submit" style="margin-top: 5px;margin-left:120px;width: 200px;height: 35px;background-color: #0000cc">Ứng tuyển</button>
</form>
</div>
