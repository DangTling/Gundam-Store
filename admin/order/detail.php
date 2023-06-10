<?php require '../check_admin_login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
</head>
<body>
<?php
    $order_id = $_GET['id'];
    require '../connect.php';
    $sql = "select * from order_detail join product on product.id = order_detail.product_id where order_id='$order_id'";
    $result = mysqli_query($connect, $sql);
    $sum=0;
    ?>
    <table border="1" width="100%">
    <tr>
        <th>Ảnh Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng tiền thanh toán</th>
    </tr>
    <?php
    foreach($result as $each):
    ?>
    <tr>
        <td>
            <img src="../product/<?php echo $each['photo'] ?>" alt="" height="100px">
        </td>
        <td>
            <?php echo $each['name'] ?>
        </td>
        <td>
            <?php echo $each['price'] ?>
        </td>
        <td>
            <?php echo $each['quantity'] ?>
        </td>
        <td>
            <?php
            echo $each['quantity'] * $each['price'];
            $sum += ($each['quantity'] * $each['price']);
            ?>
        </td>
    </tr>
    <?php endforeach ?>
    </table>
    <br><br>
    Tổng tiền hóa đơn: $<?php echo $sum ?>
</body>
</html>