<?php
require '../check_admin_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require '../features_of_admin.php';
        require '../connect.php';
        $sql = "select * from producer";
        $result = mysqli_query($connect, $sql);
    ?>
    <form action="process_insert.php" method="POST" enctype="multipart/form-data">
        Ten
        <input type="text" name="name">
        <br>
        Anh
        <input type="file" name="photo">
        <br>
        Gia Ca
        <input type="number" name="price">
        <br>
        Mo ta
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        Nha San Xuat
        <select name="id_producer" id="">
            <?php foreach($result as $each): ?>
                <option value="<?php echo $each['id'] ?>">
                    <?php echo $each['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button>Them San Pham</button>
    </form>
    
</body>
</html>