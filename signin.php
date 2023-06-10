<?php
require 'admin/connect.php';
if (isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    $sql = "select * from customer where token = '$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_num_rows($result);
    if ($number_row == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
    }
}
if (isset($_SESSION['id'])) {
    header('location: user.php');
    exit();
}
?>
<div class="modal" id="modal_signin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-danger" id="div_error_two" style="display:none"></div>
            <div class="modal-header">
                <h4 class="modal-title">Form Đăng Nhập</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-signin" method="POST">
                    Email
                    <input type="email" name="email">
                    <br>
                    Mat Khau
                    <input type="password" name="password">
                    <br>
                    <input type="checkbox" name="remember">
                    Ghi nho dang nhap
                    <br>
                    <a href="forgot_password.php">
                        Quên mật khẩu?
                    </a>
                    <br>
                    <button type="submit">Dang Nhap</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#form-signin").submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "process_signin.php",
                data: $(this).serializeArray(),
                dataType: "json",
                success: function(response) {
                    console.log(response.error);
                    if (response.error == 1) {
                        $("#modal_signin").modal('hide');
                        $(".menu_user").show();
                        $(".menu_guest").hide();
                        $(".span_hello_user").text(response.message);
                    } else {
                        $("#div_error_two").text(response.message);
                        $("#div_error_two").show();
                    }
                }
            });
        });
    });
</script>