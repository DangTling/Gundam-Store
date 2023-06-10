<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

require 'admin/connect.php';

if (empty($name) || empty($email) || empty($password) || empty($phone_number) || empty($address)) {
    echo "Bạn hãy điền đầy đủ thông tin trước khi đăng ký nhé!";
    exit;
}
$sql = "select count(*) from customer where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows= mysqli_fetch_array($result)['count(*)'];
if ($number_rows == 1) {
    echo "Email này đã được đăng kí cho một tài khoản khác. Vui lòng thử lại bằng email khác!";
    exit;
}


$sql = "insert into customer(name, email, password, phone_number, address) value('$name', '$email', '$password', '$phone_number', '$address')";
$insert_result = mysqli_query($connect, $sql);
if ($insert_result) {
    $sql = "select id from customer where email = '$email'";
    $result = mysqli_query($connect, $sql);
    $id = mysqli_fetch_array($result)['id'];

    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    mysqli_close($connect);
    echo 1;

    // require 'mail.php';
    // $content = "Chúc mừng bạn đã hoàn thành các bước tạo tài khoản<br>
    //             Để nhận thêm nhiều ưu đãi, hãy truy cập vào <a href='https://dangtling.github.io/Basic-Frontend-Project/Teasing%20lover/'>đường link này</a>.";
    // $title = "Đăng Ký Thành Công";
    // sendMail($email, $content, $title, $name);
    // echo json_encode(array('error' => 0));

} else {
    echo 0;
    // echo json_encode(array('error' => 3, 'message' => 'Lỗi khi thêm dữ liệu vào cơ sở dữ liệu'));
}
?>