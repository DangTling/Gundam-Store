<?php
require '../check_super_admin_login.php';
if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['link_photo'])) {
    header('location: insert_form.php?ket_qua=Phai Dien Day Du Thong Tin');
    die($connect);
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$link_photo = $_POST['link_photo'];

require "../connect.php";
$sql = "insert into producer(name, address, phone, link_photo) values('$name', '$address', '$phone', '$link_photo')";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php?ket_qua=Them Thanh Cong');
mysqli_close($connect);
?>