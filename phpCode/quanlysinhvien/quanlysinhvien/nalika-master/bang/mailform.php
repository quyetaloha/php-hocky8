<style>
    div input{
        color: #1b2a47;width: 300px;
    }
    div button{
        margin-left: 110px;
    }

</style>
<div class="imagebg"></div>
<div class="container">
    <div class="form-container z-depth-5" style="margin-left: 300px">
        <h3 style="margin-left: 170px">Gửi email</h3>
        <div class="row">
            <form class="col s12" id="reused_form" action="../nalika/mailsucessfully.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Địa chỉ email nhận</label>
                        <input id="mailnhan" type="text" name="mailnhan" required class="validate" >

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="email">chủ đề</label>
                        <input  style="margin-left: 83px" id="email" type="text" name="chude" required class="validate">

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Nội dung</label>
                        <textarea name="noidung" style="margin-left: 66px;width: 300px;height: 100px"></textarea>

                    </div>
                </div>
                    <div>
                        <button style="margin-left: 200px;margin-top: 20px" class="waves-effect waves-light btn submitbtn" type="submit">Gửi mail</button>
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