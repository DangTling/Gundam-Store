<?php
require '../check_super_admin_login.php';
if (empty($_GET['id'])) {
    header('location: update_form.php?ket_qua=Phai Truyen Ma De Sua Ban Oi');
    exit;
}

$id = $_GET['id'];

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['link_photo'])) {
    header("location: update_form.php?id=$id&ket_qua=Phai Dien Day Du Thong Tin");
    exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$link_photo = $_POST['link_photo'];

require "../connect.php";
$sql = "update producer set name = '$name', address = '$address', phone = '$phone', link_photo = '$link_photo' where id = '$id'";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
if (empty($error)) {
    header('location: index.php?ket_qua=Sua Thanh Cong');
} else {
    header('location: update_form.php?id=$id&ket_qua=Loi truy Van');
}

mysqli_close($connect);
?>