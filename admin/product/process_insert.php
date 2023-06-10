<?php
require '../check_admin_login.php';

$name = addslashes($_POST['name']) ;
$photo = $_FILES['photo'];
$price = addslashes($_POST['price']);
$description = addslashes($_POST['description']); 
$id_producer = addslashes($_POST['id_producer']);

$folder = 'photos/';
$file_extension = explode('.',$photo['name'])[1];
$file_name = time().'.'.$file_extension;
$path_file = $folder.$file_name;

move_uploaded_file($photo["tmp_name"], $path_file);
require '../connect.php'; 
$sql = "insert into product(name, photo, price, description, id_producer) values('$name', '$path_file', '$price', '$description', '$id_producer')";
mysqli_query($connect, $sql);
$error = mysqli_error($connect);
echo $error;
header('location: index.php');

mysqli_close($connect);
?>