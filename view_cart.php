<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/giohang.css">

    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Giỏ Hàng</title>
</head>

<body>

    <div id="main">
        <?php
        $cart = $_SESSION['cart'];
        include 'menu.php';
        $total = 0;
        ?>



        <div id="container">
            <div class="page-nav">
                <div>
                    <p class="page-gioHang"><a href="#">GIỎ HÀNG</a></p>
                    <p>></p>
                    <p class="page-thongTin"><a href="Bill.php">THÔNG TIN THANH TOÁN</a></p>
                </div>
            </div>
            <div class="info-gioHang">
                <div class="list-sanPham">
                    <ul>
                        <li class="title">
                            <p class="title-1">SẢN PHẨM</p>
                            <p class="title-2">GIÁ</p>
                            <p class="title-3">SỐ LƯỢNG</p>
                        </li>

                        <?php
                        foreach ($cart as $id => $each) :
                        ?>
                            <li class="product-1">
                                <a href="#">
                                    <p><button data-id="<?php echo $id ?>" class="btn_delete">Xóa</button></p>
                                    <img src="admin/product/<?php echo $each['photo'] ?>" alt="">
                                    <p><?php echo $each['name'] ?></p>
                                </a>
                                <p class="giaSP"><?php echo $each['price'] ?></p>

                                <div class="soLuong">

                                    <button data-id="<?php echo $id ?>" data-type="decre" class="btn_update_quantity">-</button>
                                    <span class="span_quantity">
                                        <?php echo $each['quantity'] ?>
                                    </span>
                                    <button data-id="<?php echo $id ?>" data-type="incre" class="btn_update_quantity">+</button>

                                </div>
                                <div class="priceSum">

                                    <span class="span_sum">
                                        <?php
                                        echo $each['quantity'] * $each['price'];
                                        $total += ($each['quantity'] * $each['price']);
                                        ?>
                                    </span>

                                </div>
                            </li>

                        <?php endforeach ?>

                    </ul>

                    <div class="button-nav">
                        <button class="button-nav-1" type="button"><a href="./index.html">TIẾP TỤC XEM SẢN PHẨM</a></button>
                        <button class="button-nav-2" type="button"><a href="#">CẬP NHẠT GIỎ HÀNG</a></button>
                    </div>

                </div>

                <div class="thanhToan">
                    <ul>

                        <li class="li-1">
                            <p>CỘNG GIỎ HÀNG</p>
                        </li>
                        <li class="li-2">
                            <div class="div-1-li-2">
                                <p>Giao hàng</p>
                            </div>
                            <div class="div-2-li-2">
                                <p>Phí vận chuyển sẽ báo sau</p>
                                <p>Vận chuyển đến Hà Nội</p>
                            </div>
                        </li>
                        <li class="li-3">
                            <p class="p-1">Tổng</p>
                            <p class="p-2">
                                <span id="span_total"><?php echo $total ?></span>
                            </p>
                        </li>
                    </ul>
                    <div class="button-thanhToan">
                        <button type="button"><a href="Bill.php">TIẾN HÀNH THANH TOÁN </a></button>
                    </div>

                    <div class="vouchers">
                        <p>Phiếu ưu đãi</p>
                        <input type="text" placeholder="Mã ưu đãi">
                        <button type="button"><a href="#">ÁP DỤNG</a></button>
                    </div>


                </div>
            </div>

        </div>



        <?php
        include 'footer.php';
        ?>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn_update_quantity").click(function() {
                let btn = $(this);
                let id = btn.data('id');
                let type = btn.data('type');
                let parent_tr = btn.parents('li');
                let price = parent_tr.find('.giaSP').text();
                let quantity = parent_tr.find('.span_quantity').text();
                $.ajax({
                        type: "GET",
                        url: "update_quantity_of_cart.php",
                        data: {
                            id,
                            type
                        },
                        // dataType: "dataType",
                    })
                    .done(function(data) {
                        if (type == "incre") {
                            quantity++;
                        } else {
                            quantity--;
                        }
                        if (quantity == 0) {
                            parent_tr.remove();
                        } else {
                            parent_tr.find(".span_quantity").text(quantity);
                            let sum = quantity * price;
                            parent_tr.find(".span_sum").text(sum);
                        }
                        totalBill();
                    });
            });
            $(".btn_delete").click(function() {
                let btn = $(this);
                let id = btn.data('id');
                $.ajax({
                    type: "GET",
                    url: "delete_from_cart.php",
                    data: {
                        id
                    },
                    // dataType: "dataType",
                    success: function() {
                        btn.parents('li').remove();
                        totalBill();
                    }
                });
            });

            function totalBill() {
                let total = 0;
                $(".span_sum").each(function() {
                    total += parseFloat($(this).text());
                });
                $("#span_total").text(total);
            };
        });
    </script>

</body>

</html>