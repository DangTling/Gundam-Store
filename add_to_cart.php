<?php
session_start();

require 'admin/connect.php';
require 'menu.php';

try {
    if (empty($_GET['id'])) {
        throw new Exception("Không tồn tại sản phẩm");
    }
    $id = $_GET['id'];
    if (empty($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] = 1;
        $sql = "select * from product where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        $_SESSION['cart'][$id]['name'] = $each['name'];
        $_SESSION['cart'][$id]['photo']=$each['photo'];
        $_SESSION['cart'][$id]['price']=$each['price'];
    } else {
        $_SESSION['cart'][$id]['quantity']++;
    }

    echo json_encode($_SESSION['cart']);
    header('location:view_cart.php');
} catch (\Throwable $th) {
   echo $th->getMessage();
}
