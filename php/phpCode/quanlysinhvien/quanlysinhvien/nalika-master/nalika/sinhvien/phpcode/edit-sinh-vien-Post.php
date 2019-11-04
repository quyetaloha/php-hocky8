<?php

$sql="select * from sinhvien where idsinhvien=".$_GET["id"];
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($result);
foreach ($row as $item)
?>
<style>
    div input{
        color: #1b2a47;width: 300px;
    }
    div button{
        margin-left: 110px;
    }

</style>
<div class="imagebg"></div>
<div class="container" style="margin-left: 100px">
    <div class="form-container z-depth-5" style="margin-left: 300px">
        <h3 style="margin-left: 40px">Sửa thông tin</h3>
        <div class="row">
            <form class="col s12" id="reused_form" action="phpcode/editSinhVienPostHandler.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input style="background-color: #185875" id="name" type="text" name="id" required class="validate" value="<?php echo $item[0];?>" readonly>
                        <label for="name">ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="hoten" required class="validate" value="<?php echo $item[1];?>">
                        <label for="email">Họ Tên</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="truong" required class="validate" value="<?php echo $item[2];?>">
                        <label for="name">Trường</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="chuyennganh" required class="validate" value="<?php echo $item[3];?>">
                        <label for="name">Chuyên ngành</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="namtotnghiep" required class="validate" value="<?php echo $item[4];?>">
                        <label for="name">Năm tốt nghiệp</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="chungchi" required class="validate" value="<?php echo $item[5];?>">
                        <label for="name">Chứng chỉ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="email" required class="validate" value="<?php echo $item[6];?>">
                        <label for="name">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="diem" required class="validate" value="<?php echo $item[7];?>">
                        <label for="name">Điểm</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="vitri" required class="validate" value="<?php echo $item[8];?>">
                        <label for="name">Vị trí ứng tuyển</label>
                    </div>
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