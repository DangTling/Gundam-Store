
<div id="modal_signup" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-danger" id="div_error" style="display:none"></div>
            <div class="modal-header">
                <h4 class="modal-title">Form Dang Ky</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-signup" method="post">
                    Ten 
                    <input type="text" name="name"><br>
                    Email
                    <input type="email" name="email"><br>
                    So Dien Thoai
                    <input type="number" name="phone_number"><br>
                    Dia Chi
                    <input type="text" name="address" id=""><br>
                    Mat Khau
                    <input type="password" name="password"><br>
                    <button type="submit">Dang Ky</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#form-signup").submit(function(event){
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "process_signup.php",
                data: $(this).serializeArray(),
                dataType: "html",
                success: function (response) {
                    if (response == 1) {
                        $("#modal_signup").modal('hide');
                        $(".menu_user").show();
                        $(".menu_guest").hide();
                        $(".span_hello_user").text($("input[name='name']").val());
                    } else {
                        $("#div_error").text(response);
                        $("#div_error").show();
                    }
                }
            });
        });
    });
</script>
