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
    <?php
        if (empty($_GET['id'])) {
            header('location:index.php?ket_qua=Phai Truyen Ma De Sua Ban Oi');
            exit;
        }
        if (isset($_GET['ket_qua'])) {
    ?>
    <span style="color: red; font-size: 40px">
        <?php echo $_GET['ket_qua'] ?>
    </span>
    <?php
        }
        include '../features_of_admin.php';
        require '../connect.php';
        $id = $_GET['id'];
        $sql = "select * from producer where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php?id=<?php echo $each['id']?>" method="POST">
        Ten
        <input type="text" name="name" value="<?php echo $each['name'] ?>">
        <br>
        Dia Chi
        <textarea name="address" id="" cols="30" rows="10"><?php echo $each['address'] ?></textarea>
        <br>
        Dien Thoai
        <input type="text" name="phone" value="<?php echo $each['phone'] ?>">
        <br>
        Anh
        <input type="text" name="link_photo" value="<?php echo $each['link_photo'] ?>">
        <br>
        <button>Sua Thong Tin</button>
    </form>
    <?php mysqli_close($connect) ?>
</body>
</html>