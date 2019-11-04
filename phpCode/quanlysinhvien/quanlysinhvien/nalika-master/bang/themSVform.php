
<style>
    div input{
        color: #1b2a47;width: 300px;
    }
    div button{
        margin-left: 110px;
    }

</style>
<div class="imagebg"></div>
<div class="container" style="margin-left: 150px">
    <div class="form-container z-depth-5" style="margin-left: 300px">
        <h3 style="margin-left: 40px">Thêm sinh viên</h3>
        <div class="row" >
            <form class="col s12" id="reused_form" action="../phpSource/themSinhVienHandle.php" method="post">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="hoten" required class="validate">
                        <label for="email">Họ Tên</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="truong" required class="validate">
                        <label for="name">Trường</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="chuyennganh" required class="validate">
                        <label for="name">Chuyên ngành</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="namtotnghiep" required class="validate">
                        <label for="name">Năm tốt nghiệp</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="chungchi" required class="validate">
                        <label for="name">Chứng chỉ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="email" required class="validate">
                        <label for="name">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="diem" required class="validate">
                        <label for="name">Điểm</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="vitri" required class="validate">
                        <label for="name">Vị trí ứng tuyển</label>
                    </div>
                </div>
                <div>
                    <button class="waves-effect waves-light btn submitbtn" type="submit">Thêm</button>
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