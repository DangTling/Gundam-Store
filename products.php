<div id="container">

    <h3>
        <p>HÀNG MỚI VỀ</p>
    </h3>
    <div id="container-1">

        <div class="row row-1">
            <?php
            require 'admin/connect.php';
            $sql = "select * from product limit 4";
            $result = mysqli_query($connect, $sql);
            ?>
            <?php foreach ($result as $each) : ?>
                <div class="box box-1">
                    <div class="img-item">
                        <a class="item-1" href="product.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/product/<?php echo $each['photo'] ?>" alt="">
                            <img class="img-change" src="https://i.pinimg.com/236x/11/66/9d/11669de5c98bf13c39954b07d2164de3.jpg" alt="">

                        </a>
                    </div>
                    <div class="info">
                        <span class="name-item"><a href="product.php?id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></span>
                        <span class="price"><?php echo $each['price'] ?>$</span>
                        <?php
                        if (!empty($_SESSION['id'])) { ?>
                            <button type="button"><a href="add_to_cart.php?id=<?php echo $each['id'] ?>">MUA NGAY</a></button>
                            <button data-id="<?php echo $each['id'] ?>" class="btn_add_to_cart">Thêm vào giỏ hàng</button>
                        <?php }
                        ?>
                    </div>
                </div>

            <?php endforeach ?>
        </div>


        <div class="row row-2">
            <?php foreach ($result as $each) : ?>
                <div class="box box-6">
                    <div class="img-item">
                        <a class="item-6" href="product.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/product/<?php echo $each['photo'] ?>" alt="">
                            <img class="img-change" src="https://i.pinimg.com/564x/26/af/2a/26af2a6002768ba04494b04734a4f2cb.jpg" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <span class="name-item"><a href="product.php?id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></span>
                        <span class="price"><?php echo $each['price'] ?>$</span>
                        <?php
                        if (!empty($_SESSION['id'])) { ?>
                            <button type="button"><a href="#">MUA NGAY</a></button>
                            <button data-id="<?php echo $each['id'] ?>" class="btn_add_to_cart">Thêm vào giỏ hàng</button>

                        <?php }
                        ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <h3>
        <p>ĐANG GIẢM GIÁ</p>
    </h3>
    <div id="container-2">
        <div class="row row-3">
            <?php
            require 'admin/connect.php';
            $sql = "select * from product ";
            $result = mysqli_query($connect, $sql);
            ?>
            <?php foreach ($result as $each) : ?>
                <div class="box box-11">
                    <div class="img-item">
                        <a class="item-11" href="product.php?id=<?php echo $each['id'] ?>">
                            <img src="admin/product/<?php echo $each['photo'] ?>" alt="">
                            <img class="img-change" src="https://i.pinimg.com/564x/e7/59/bc/e759bcac24ae380ce684459d7f52e1eb.jpg" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <span class="name-item"><a href="product.php?id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></span>
                        <span class="price"><?php echo $each['price'] ?>$</span>
                        <?php
                        if (!empty($_SESSION['id'])) { ?>
                            <button type="button"><a href="#">MUA NGAY</a></button>
                            <button data-id="<?php echo $each['id'] ?>" class="btn_add_to_cart">Thêm vào giỏ hàng</button>
                        <?php }
                        ?>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

    </div>
</div>