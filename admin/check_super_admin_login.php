<?php
session_start();
if (empty($_SESSION['level'])) { //func empty kiểm tra giá trị vừa tồn tại vừa khác 0
    header('location: ../index.php');
}
?>