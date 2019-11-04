<?php

$sql="select * from quanly where id=".$_SESSION["idsohuu"];
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
    form div{
        margin: 3px;
    }

</style>
<div class="imagebg"></div>
<div class="container">
    <div class="form-container z-depth-5" style="margin-left: 420px">
        <h3 style="margin-left: 50px">Sửa thông tin</h3>
        <div class="row">
            <form class="col s12" id="reused_form" action="../phpSource/editquanlyHandler.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="id" required class="validate" value="<?php echo $item[0];?>" readonly>
                        <label for="name">ID</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="hoten" required class="validate" value="<?php echo $item[1];?>">
                        <label for="email">Họ tên</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="ngaysinh" required class="validate" value="<?php echo $item[2];?>">
                        <label for="name">Ngày sinh</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="diachi" required class="validate" value="<?php echo $item[3];?>">
                        <label for="name">Địa chỉ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="chucvu" required class="validate" value="<?php echo $item[4];?>">
                        <label for="name">Chức vụ</label>
                    </div>

                <div>
                    <button style="margin-top: 7px" class="waves-effect waves-light btn submitbtn" type="submit">Sửa thông tin</button>
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