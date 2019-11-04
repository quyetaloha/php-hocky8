<?php
    $tenvitri=$_POST["vitri"];
    $mang=explode('.', $tenvitri);

    $sql="select * from sinhvien where vitriungtuyen=N'".$mang[0]."' order by diem DESC limit ".$mang[1];
    $sql2="select * from sinhvien where vitriungtuyen=N'".$mang[0]."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result);
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_all($result2);
?>
<table class="containerr" style="margin-left: 70px;">
    <h1>số lượng tuyển: <?php echo $mang[1];?> / <?php echo count($row2);?></h1>
    <thead>
    <tr>
        <th style="text-align: center"><h1>ID</h1></th>
        <th><h1 style="text-align: center">Họ Tên</h1></th>
        <th><h1 style="text-align: center">Trường</h1></th>
        <th><h1 style="text-align: center">Chuyên Ngành</h1></th>
        <th><h1 style="text-align: center">Năm tốt nghiệp</h1></th>
        <th><h1 style="text-align: center">Chứng chỉ</h1></th>
        <th><h1 style="text-align: center">Email</h1></th>
        <th><h1 style="text-align: center">Điểm</h1></th>
        <th><h1 style="text-align: center">Vị trí ứng tuyển</h1></th>
        <th><h1 style="text-align: center"></h1></th>
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
        <td><h5><?php echo $item[5]?></h5></td>
        <td><h5><?php echo $item[6]?></h5></td>
        <td><h5 style="margin-left: 10px;"><?php echo $item[7]?></h5></td>
        <td><h5 ><?php echo $item[8]?></h5></td>
        <td>
            <a href="../nalika/index-admin-editSV.php?id=<?php echo $item[0]?>">sửa</a>
            <a href="../phpSource/deleteSinhVienHandler.php?id=<?php echo $item[0]?>">xóa</a><br>
            <a href="../nalika/guiMailThanhCong.php?id=<?php echo $item[0]?>">gửi mail trúng tuyển</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>