<?php
require '../connect.php';
$chosen = $_POST['date'];
$sql = "select sum(total_price) from orders where status = 1 and created_at > '$chosen'";
$result = mysqli_query($connect, $sql);
$total_price = mysqli_fetch_array($result)[0];
header("location: index.php?total=$total_price");
?>