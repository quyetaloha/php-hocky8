<style>
    div input{
        color: #1b2a47;width: 300px;
    }
    div button{
        margin-left: 110px;
    }
    form div{
        margin-bottom: 5px;
    }
</style>
<div class="imagebg"></div>
<div class="container" style="margin-left: 140px;">
    <div class="form-container z-depth-5" style="margin-left: 300px">
        <h3>Thêm vị trí tuyển dụng</h3>
        <div class="row">
            <form class="col s12" id="reused_form" action="../phpSource/themViTriHandle.php" method="post">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="text" name="ten" required class="validate">
                        <label for="email">Tên</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="noilamviec" required class="validate">
                        <label for="name">Nơi làm việc</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="mota" required class="validate" >
                        <label for="name">Mô tả</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="name" type="text" name="soluong" required class="validate">
                        <label for="name">Số lượng tuyển</label>
                    </div>
                </div>
                <div>
                    <div>
                        <button class="waves-effect waves-light btn submitbtn" type="submit" style="margin-top: 10px">Thêm</button>
                    </div>
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