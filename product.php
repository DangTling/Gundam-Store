<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./assets/css/sanPham.css">

    <link rel="stylesheet" href="./assets/css/header.css">
    <!-- <link rel="stylesheet" href="./assets/css/container.css"> -->
    <link rel="stylesheet" href="./assets/css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>GunDam.com</title>


</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <div id="main">

        <?php
        include 'menu.php';
        ?>

        <?php
        $id = $_GET['id'];
        require 'admin/connect.php';
        $sql = "select * from product where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        ?>

        <div id="container">
            <div class="img-item">
                <div class="box-img-main">
                    <img id="img-main" src="admin/product/<?php echo $each['photo'] ?>" alt="" onclick="myFunction_2(this.src)">
                </div>
                <ul>
                    <li class="img-change-1">
                        <a href=""><img src="admin/product/<?php echo $each['photo'] ?>" alt="" onclick="myFunction(this.src)"></a>
                    </li>
                    <li class="img-change-2">
                        <a href="#"><img src="https://i.pinimg.com/236x/bc/78/bf/bc78bf77bf76fc11762ff52f011807fb.jpg" alt="" onclick="myFunction(this.src)"></a>
                    </li>
                    <li class="img-change-3">
                        <a href="#"><img src="https://i.pinimg.com/236x/11/66/9d/11669de5c98bf13c39954b07d2164de3.jpg" alt="" onclick="myFunction(this.src)"></a>
                    </li>
                </ul>


            </div>
            <div class="info-item">
                <h1><?php echo $each['name'] ?></h1>
                <span class="span-1"><?php echo $each['price'] ?>$</span>
                <ul>
                    <li>Series: Figure-rise Standard</li>
                    <li>Hàng chính hãng Bandai (Nhật Bản)</li>
                    <li>Phân phối bởi AZGundam</li>
                    <li>Giao hàng Toàn Quốc</li>
                    <li>Hotline đặt hàng: 070.779.1000 (bấm gọi ngay)</li>
                </ul>
                <div class="buttons-operation">

                    <div class="buttons_added">
                        <input class="minus is-form" type="button" value="-">
                        <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                        <input class="plus is-form" type="button" value="+">
                    </div>

                    <div class="buttons-buy">
                        <button type="button"><a href="add_to_cart.php?id=<?php echo $each['id'] ?>">MUA NGAY</a></button>

                    </div>
                </div>
                <p class="Ma">Mã: FRSANGEMON</p>
                <p class="Danh-Muc">Danh mục: GunDam Bandai</p>
                <p class="Tu-Khoa">Từ khóa:gundam mg</p>

                <div class="external-link">
                    <ul>

                        <li><a href="#"><img src="./assets/images/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="./assets/images/twitter.png" alt=""></a></li>
                        <li><a href="#"><img src="./assets/images/gmail.png" alt=""></a></li>
                        <li><a href="#"><img src="./assets/images/pinterest.png" alt=""></a></li>
                    </ul>
                </div>
            </div>


        </div>
        <div id="container-2">
            <div class="describe">
                <h3>Mô Tả</h3>
                <ul>
                    <li>
                        <p>Mua gundam astray red frame mg tại Azgundam luôn có giá tốt nhất</p>
                    </li>
                    <li>
                        <p>MG Astray Red Frame</p>
                    </li>
                    <li>
                        <p>Sản phẩm nhựa cao cấp với độ sắc nét cao, an toàn cho người chơi</p>
                    </li>
                    <li>
                        <p>Mô hình lắp ráp rèn luyện tính kiên nhẫn, khéo léo.</p>
                    </li>
                    <li>
                        <p>Các khớp cử động linh hoạt theo ý muốn.</p>
                    </li>
                    <li>
                        <p>Xem thêm các mẫu Gundam MG khác tại đây: Gundam MG</p>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </div>
    <script>
        function myFunction(abc) {
            document.querySelector("#img-main").src = abc;
        }

        function myFunction_2(image) {
            document.querySelector("#img-main").src = image;


        }
    </script>


    <script>
        //<![CDATA[
        $('input.input-qty').each(function() {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            if (min == 0) {
                var d = 0
            } else d = min
            $(qty).on('click', function() {
                if ($(this).hasClass('minus')) {
                    if (d > min) d += -1
                } else if ($(this).hasClass('plus')) {
                    var x = Number($this.val()) + 1
                    if (x <= max) d += 1
                }
                $this.attr('value', d).val(d)
            })
        })
        //]]>
    </script>

</body>

</html>