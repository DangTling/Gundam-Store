<?php

if (empty($_SESSION['id'])) {
    include 'signup.php';
    include 'signin.php';
}

if (isset($_GET['loi'])) {
    echo $_GET['loi'];
} ?>



<div id="main">
    <div id="header">
        <div id="header-box">
            <div class="search-box">
                <input type="text" placeholder="Tìm kiếm"></input>
            </div>
            <div class="logo">
                <a href="index.php">
                    <img src="./assets/images/img-logo.png" alt="img-logo">
                </a>
            </div>
            <div class="header-nav-bar">
                <ul>
                    <li class="heart"><a href="#" class="ti-heart"></a></li>
                    <li class="menu_guest" style="<?php if (!empty($_SESSION['id'])) { ?> display:none; <?php } ?>">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_signin">Đăng Nhập</button>
                    </li>
                    <li class="menu_guest" style="<?php if (!empty($_SESSION['id'])) { ?> display:none; <?php } ?>">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_signup">Đăng Ký</button>
                    </li>
                    <li class="menu_user" style="<?php if (empty($_SESSION['id'])) { ?> display:none; <?php } ?>"><a href="signout.php">Dang Xuat</a></li>
                    <li class="menu_user " style="<?php if (empty($_SESSION['id'])) { ?> display:none; <?php } ?>"><a href="user.php" class="ti-user"></a></li>
                    <li class="bag menu_user" style="<?php if (empty($_SESSION['id'])) { ?> display:none;<?php } ?>"><a href="view_cart.php" class="ti-bag"></a></li>
                </ul>
            </div>
        </div>

        <div id="menu">
            <ul>
                <li class="list-1">
                    <a class="ct" href="#">GUNDAM</a>
                    <div class="subnav">
                        <p><a href="#">SD - SUPER DEFORMED</a></p>
                        <p><a href="#">HG - HIGH GRADE 1/144</a></p>
                        <p><a href="#">RG - REAL GRADE 1/144</a></p>
                        <p><a href="#">MG - MASTER GRADE 1/100</a></p>
                        <p><a href="#">RE/100</a></p>
                        <p><a href="#">P-BANDAI</a></p>
                        <p><a href="#">PR - PERFECT GRADE 1/60</a></p>
                        <p><a href="#">MEGASIZE 1/48</a></p>
                    </div>
                </li>
                <li class="list-2"><a class="ct" href="#">DỤNG CỤ</a></li>
                <li class="list-3"><a class="ct" href="#">PHỤ KIỆN - GIÁ ĐỠ</a></li>
                <li class="list-4"><a class="ct" href="#">SƠN - DUNG DỊCH</a></li>
                <li class="list-5"><a class="ct" href="#">FIGURES</a></li>
                <li class="list-6"><a class="ct" href="#">SẢN PHẨM KHÁC</a></li>
                <li class="list-7"><a class="ct" href="#">THÔNG TIN</a></li>
            </ul>
        </div>
    </div>