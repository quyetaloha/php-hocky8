<?php
    $sql="select * from sinhvien where idsinhvien=".$_SESSION["idsohuu"];
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_all($result);
?>

<!--    -->
<!--    -->
<!--    -->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th style="text-align: center"><h1>ID</h1></th>-->
<!--        <th><h1 style="text-align: center">Họ Tên</h1></th>-->
<!--        <th><h1 style="text-align: center">Trường</h1></th>-->
<!--        <th><h1 style="text-align: center">Chuyên Ngành</h1></th>-->
<!--        <th><h1 style="text-align: center">Năm tốt nghiệp</h1></th>-->
<!--        <th><h1 style="text-align: center">Chứng chỉ</h1></th>-->
<!--        <th><h1 style="text-align: center">Email</h1></th>-->
<!--        <th><h1 style="text-align: center">Điểm</h1></th>-->
<!--        <th><h1 style="text-align: center">Vị trí ứng tuyển</h1></th>-->
<!--        <th><h1 style="text-align: center"></h1></th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    foreach ($row as $item){
//    ?>
<!--    <tr>-->
<!--        <td><h5>--><?php //echo $item[0]?><!--</h5></td>-->
<!--        <td><h5 style="margin-left: 15px;">--><?php //echo $item[1]?><!--</h5></td>-->
<!--        <td><h5>--><?php //echo $item[2]?><!--</h5></td>-->
<!--        <td><h5>--><?php //echo $item[3]?><!--</h5></td>-->
<!--        <td><h5>--><?php //echo $item[4]?><!--</h5></td>-->
<!--        <td><h5>--><?php //echo $item[5]?><!--</h5></td>-->
<!--        <td><h5>--><?php //echo $item[6]?><!--</h5></td>-->
<!--        <td><h5 style="margin-left: 10px;">--><?php //echo $item[7]?><!--</h5></td>-->
<!--        <td><h5 >--><?php //echo $item[8]?><!--</h5></td>-->
<!--        <td>-->
<!--            <a href="../nalika/index-admin-editSV.php?id=--><?php //echo $item[0]?><!--">sửa</a>-->
<!--            <a href="../phpSource/deleteSinhVienHandler.php?id=--><?php //echo $item[0]?><!--">xóa</a>-->
<!--        </td>-->
<!--    </tr>-->
<!--    --><?php //}?>
<!--    </tbody>-->
<?php foreach ($row as $item) {?>
    <table class="containerr" style="margin-left: 70px;">
    <tr>
    <td>
        ID
    </td>
    <td>
        <?php echo $item[0]?>
    </td>
    </tr>

    <tr>
    <td>
        Họ tên
    </td>
    <td>
        <?php echo $item[1]?>
    </td>
    </tr>

    <tr>
    <td>
        Trường
    </td>
    <td>
        <?php echo $item[2]?>
    </td>
    </tr>

    <tr>
    <td>
        Chuyên ngành
    </td>
    <td>
        <?php echo $item[3]?>
    </td>
    </tr>

    <tr>
    <td>
        Năm tốt nghiệp
    </td>
    <td>
        <?php echo $item[4]?>
    </td>
    </tr>

    <tr>
    <td>
        Chứng chỉ
    </td>
    <td>
        <?php echo $item[5]?>
    </td>
    </tr>

    <tr>
    <td>
        Email
    </td>
    <td>
        <?php echo $item[6]?>
    </td>
    </tr>

    <tr>
    <td>
        Điểm
    </td>
    <td>
        <?php echo $item[7]?>
    </td>
    </tr>

    <tr>
    <td>
        Vị trí ứng tuyển
    </td>
    <td>
        <?php echo $item[8]?>
    </td>
    </tr>
    </table>
<?php }?>

