<?php
require '../check_super_admin_login.php';

if (empty($_GET['id'])) {
    header('location: update_form.php?ket_qua=Phai Truyen Ma De Sua Ban Oi');
    exit;
}
$id = $_GET['id'];
require "../connect.php";
$sql = "delete from producer where id = '$id'";
mysqli_query($connect, $sql);
header('location: index.php?ket_qua=Xoa Thanh Cong');
mysqli_close($connect);
?>