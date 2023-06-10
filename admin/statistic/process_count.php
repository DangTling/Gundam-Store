<?php
require '../connect.php';
$now = $_POST['date'];
$sql = "select count(*) from orders where created_at > '$now'";
$result = mysqli_query($connect, $sql);
$count = mysqli_fetch_array($result)[0];

header("location: index.php?result=$count");
?>