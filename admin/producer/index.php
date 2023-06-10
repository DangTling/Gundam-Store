<?php
require '../check_super_admin_login.php';
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
    Giao Dien Quan Li Nha San Xuat (Producer)
    <br>
    <a href="insert_form.php">Them</a>
    <br>
    <?php
    if (isset($_GET['ket_qua'])) {
    ?>
        <span style="color: red; font-size: 40px">
            <?php echo $_GET['ket_qua'] ?>
        </span>
    <?php
    }
    include '../features_of_admin.php';
    include '../connect.php';
    $sql = "select * from producer";
    $result = mysqli_query($connect, $sql);
    ?>
    <table border="1" width="100%">
        <tr>
            <th>Ma</th>
            <th>Ten</th>
            <th>Dia Chi</th>
            <th>Dien Thoai</th>
            <th>Logo</th>
            <th>Sua</th>
            <th>Xoa</th>
        </tr>
        <?php foreach ($result as $each): ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['name'] ?></td>
            <td><?php echo $each['address'] ?></td>
            <td><?php echo $each['phone'] ?></td>
            <td>
                <img height="150px" src="<?php echo $each['link_photo'] ?>" alt="Logo Cua Producer" >
            </td>
            <td>
                <a href="update_form.php?id=<?php echo $each['id'] ?>">Sua Thong Tin</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>">Xoa Thong Tin</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <?php mysqli_close($connect); ?>
</body>
</html>