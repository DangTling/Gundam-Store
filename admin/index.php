<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin</title>
</head>
<body>
    <?php
    if(isset($_GET['loi'])) {
        ?>
        <h2><?php echo $_GET['loi'] ?></h2>
        <?php
    } 
    ?>
    <form action="process_signin.php" method="POST">
        <h1>Đăng Nhập</h1>
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name= "password">
        <br>
        <button>Đăng Nhập</button>
    </form>
</body>
</html>