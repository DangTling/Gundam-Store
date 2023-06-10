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
        $id = $_GET['id'];
        $sql = "select * from product where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);

        $sql = "select * from producer";
        $result = mysqli_query($connect, $sql);
    ?>
    <form action="process_update.php?id=<?php echo $each['id'] ?>" method="POST" enctype="multipart/form-data">
        Ten
        <input type="text" name="name" value="<?php echo $each['name'] ?>">
        <br>
        Doi Anh Moi
        <input type="file" name="photo_new">
        <br>
        Hoac Giu Anh Cu
        <img src="./photos/<?php echo $each['photo'] ?>" alt="" height="200px">
        <input type="hiddden" name="photo_old" value="<?php echo $each['photo'] ?>">
        <br>
        Gia Ca
        <input type="number" name="price" value="<?php echo $each['price'] ?>">
        <br>
        Mo ta
        <textarea name="description" id="" cols="30" rows="10"><?php echo $each['description'] ?></textarea>
        <br>
        Nha San Xuat
        <select name="id_producer" id="">
            <?php foreach($result as $once): ?>
                <option value="<?php echo $once['id'] ?>" 
                <?php if ($each['id_producer'] == $once['id']) { ?>
                    selected
                <?php } ?>
                >
                    <?php echo $once['name'] ?>
                </option>
            <?php endforeach ?>
        </select>
        <br>
        <button>Sua San Pham</button>
    </form>
</body>
</html>