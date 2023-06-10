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
    $sql = "select product.*, producer.name as name_producer
    from product join producer on product.id_producer = producer.id";
    $result = mysqli_query($connect, $sql);
    ?>
    <h1>Quan Li San Pham</h1>
    <a href="insert_form.php">Them San Pham</a>
    <table width="100%" border="1">
        <tr>
            <th>Ma</th>
            <th>Ten</th>
            <th>Anh</th>
            <th>Gia</th>
            <th>Ten Nha San Xuat</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
        <?php foreach($result as $each): ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['name'] ?></td>
            <td>
                <img height="150px" src="<?php echo $each['photo'] ?>" alt="">
            </td>
            <td><?php echo $each['price'] ?></td>
            <td><?php echo $each['name_producer'] ?></td>
            <td>
                <a href="update_form.php?id=<?php echo $each['id'] ?>">Sua Thong Tin</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id']?>">Xoa Thong Tin</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>