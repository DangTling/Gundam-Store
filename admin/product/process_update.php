<?php
require '../check_admin_login.php';

require '../connect.php';
$id = $_GET['id'];
$name = $_POST['name'];
$photo_new = $_FILES['photo_new'];
if ($photo_new['size']>0) {
    $folder = 'photos/';
    $file_extension = explode('.',$photo['name'])[1];
    $file_name = time().'.'.$file_extension;
    $path_file = $folder.$file_name;
    move_uploaded_file($photo["tmp_name"], $path_file);
} else {
    $path_file = $_POST['photo_old'];
}
$price = $_POST['price'];
$description = $_POST['description'];
$id_producer = $_POST['id_producer'];

$sql = "update product set name = '$name', photo = '$path_file', price = '$price', description = '$description', id_producer = '$id_producer' where id ='$id'";
mysqli_query($connect, $sql);
header('location: index.php?ket_qua = Sửa Thành Công');
mysqli_close($connect);

?>