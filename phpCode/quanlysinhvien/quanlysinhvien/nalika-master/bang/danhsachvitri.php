<?php
    $sql="select * from vitri";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result);
?>
<div style="margin-left: 20px;width: 1200px">
<table class="containerr" style="margin-left: 70px;">
    <thead>
    <tr>
        <th style="text-align: center"><h1>ID</h1></th>
        <th><h1 style="text-align: center">Tên</h1></th>
        <th><h1 style="text-align: center">Nơi làm việc</h1></th>
        <th><h1 style="text-align: center">Mô tả</h1></th>
        <th><h1 style="text-align: center">Số lượng chỉ tiêu</h1></th>
        <th><h1>funcition</h1></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($row as $item){
    ?>
    <tr>
        <td><h5><?php echo $item[0]?></h5></td>
        <td><h5 style="margin-left: 15px;"><?php echo $item[1]?></h5></td>
        <td><h5><?php echo $item[2]?></h5></td>
        <td><h5><?php echo $item[3]?></h5></td>
        <td><h5><?php echo $item[4]?></h5></td>
        <td>
            <a href="../nalika/edit-tuyendung.php?id=<?php echo $item[0]?>">sửa</a>
            <a href="../phpSource/deleteVitriHandler.php?id=<?php echo $item[0]?>">xóa</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>
</div>