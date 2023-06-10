<?php
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($_POST['remember'])) {
    $remember =  true;
} else {
    $remember = false;
}

if (empty($email) || empty($password)) {
    echo json_encode(array('error' => 2, 'message' => "Bạn hãy điền đầy đủ thông tin trước khi đăng ký nhé!"));
    exit;
}

require 'admin/connect.php';
$sql = "select * from customer where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);

$number_rows = mysqli_num_rows($result);

if ($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $each['name'];
    if ($remember) {
        $token = uniqid('user_', true);
        $sql = "update customer set token = '$token' where id = '$id'";
        mysqli_query($connect, $sql);
        setcookie('remember', $token, time() + 3600 * 24 * 30);
    }

    echo json_encode(array('error' => 1, 'message' => $each['name']));
    exit;
}
echo json_encode(array('error' => 0, 'message' => "Bạn đã đăng nhập sai tài khoản hoặc mật khẩu rồi, hãy thử lại!"));
