<?php

$email = $_POST['email'];
require 'admin/connect.php';

$sql = "select id, name from customer where email = '$email'";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) === 1) {
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $name = $each['name'];
    $sql = "select count(*) from forgot_password where customer_id = '$id'";
    $result = mysqli_query($connect, $sql);
    $check = mysqli_fetch_array($result)['count(*)'];
    if ($check == 0) {
        $token = uniqid();
        $sql = "insert into forgot_password(customer_id, token) values('$id', '$name')";
        mysqli_query($connect, $sql);

        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        $url = $url.'/Homework/change_new_password.php?token='.$token;
        require 'mail.php';
        $title = "Đổi Mật Khấu";
        $content = "Hãy vào link <a href='$url'>này</a> để thay đổi mật khẩu mới.
                    Link chỉ hiệu lực trong 10 phút.";
        sendMail($email,$name,$title,$content);
    } else {
        header('location: index.php?loi=bạn đã hết lượt đổi lại mật khẩu trong ngày hôm nay');
    }
}

?>