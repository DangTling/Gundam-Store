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
        if (isset($_GET['ket_qua'])) {
    ?>
            <span style="color: red; font-size: 40px">
                <?php echo $_GET['ket_qua'] ?>
            </span>
    <?php    
        }
    ?>
    <form action="process_insert.php" method="POST">
        Ten
        <input type="text" name="name">
        <br>
        Dia Chi
        <textarea name="address" id="" cols="30" rows="10"></textarea>
        <br>
        Dien Thoai
        <input type="text" name="phone">
        <br>
        Anh
        <input type="text" name="link_photo">
        <br>
        <button>Them</button>
    </form>
</body>
</html>