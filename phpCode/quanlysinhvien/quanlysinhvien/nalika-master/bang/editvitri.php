<?php

$sql="select * from vitri where idvitri=".$_GET["id"];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result);
foreach ($row as $item)
?>
<!--<form>-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td>-->
<!--                id-->
<!--            </td>-->
<!--            <td>-->
<!--                <input type="text" value="" disabled>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Họ Tên-->
<!--            </td>-->
<!--            <td>-->
<!--                <input type="text" value="--><?php //echo $item[1];?><!--">-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                Trường-->
<!--            </td>-->
<!--            <td>-->
<!--                <input type="text" value="--><?php //echo $item[2];?><!--">-->
<!--            </td>-->
<!--        </tr>-->
<!--    </table>-->
<!--    <br>-->
<!---->
<!--    <br>-->
<!--    Chuyên ngành<input type="text" value="--><?php //echo $item[3];?><!--"><br>-->
<!--    Năm tốt nghiệp<input type="text" value="3245334435"><br>-->
<!--    Chứng chỉ<input type="text" value="--><?php //echo $item[5];?><!--"><br>-->
<!--    mail<input type="text" value="--><?php //echo $item[6];?><!--"><br>-->
<!--    Điểm<input type="text" value="--><?php //echo $item[7];?><!--"><br>-->
<!--    Vị trí ứng tuyển<input type="text" value="--><?php //echo $item[8];?><!--"><br>-->
<!--    <input type="submit" value="sửa"><br>-->
<!--</form>-->
<style>
    div input{
        color: #1b2a47;width: 300px;
    }
    div button{
        margin-left: 110px;
    }
    form div{
        margin: 3px;
    }
</style>
<div class="imagebg"></div>
<div class="container" style="margin: 5px">
    <h3 style="margin-left: 390px">Sửa thông tin vị trí tuyển dụng</h3>
    <div class="form-container z-depth-5" style="margin-left: 420px">

        <div class="row">
            <form class="col s12" id="reused_form" action="../phpSource/editVitriHandler.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="id" required class="validate" value="<?php echo $item[0];?>" readonly >
                        <label for="name">ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="ten" required class="validate" value="<?php echo $item[1];?>">
                        <label for="email">Tên</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="noilamviec" required class="validate" value="<?php echo $item[2];?>">
                        <label for="name">Nơi làm việc</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="mota" required class="validate" value="<?php echo $item[3];?>">
                        <label for="name">Mô tả</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="soluong" required class="validate" value="<?php echo $item[4];?>">
                        <label for="name">Số lượng tuyển</label>
                    </div>

                <div>
                    <button class="waves-effect waves-light btn submitbtn" type="submit">Sửa thông tin</button>
                </div>
            </form>
            <div id="error_message" style="width:100%; height:100%; display:none; ">
                <h4>Error</h4>
                Sorry there was an error sending your form.
            </div>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h4>Success! Your Message was Sent Successfully.</h4>
            </div>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>