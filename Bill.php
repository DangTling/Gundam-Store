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
  <link rel="stylesheet" href="./assets/css/thongtinthanhtoan.css">

  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <title>Document</title>
</head>

<body>

  <div id="main">
    <?php
    $cart = $_SESSION['cart'];
    require 'menu.php';
    ?>
    <div id="container">
      <div class="page-nav">
        <div>
          <p class="page-gioHang"><a href="view_cart.php">GIỎ HÀNG</a></p>
          <p>></p>
          <p class="page-thongTin"><a href="#">THÔNG TIN THANH TOÁN</a></p>
        </div>
      </div>
      <?php
      require 'admin/connect.php';
      $id = $_SESSION['id'];
      $sql = "select * from customer where id = '$id'";
      $result = mysqli_query($connect, $sql);
      $each = mysqli_fetch_array($result);
      ?>
      <form action="process_checkout.php" method="POST">
        <div class="form2">
          <div class="row">
            <div class="col">
              <label for="ho_ten">Họ và Tên:</label>
              <input type="text" id="ho_ten" name="ho_ten" placeholder="Nhập họ tên của bạn" value='<?php echo $each['name'] ?>'>
            </div>

            <div class="col">
              <label for="so_dien_thoai">Số điện thoại:</label>
              <input type="text" id="so_dien_thoai" name="so_dien_thoai" placeholder="Nhập số điện thoại của bạn" value='<?php echo $each['phone_number'] ?>'>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Nhập địa chỉ email của bạn">
            </div>

            <div class="col">
              <label for="tinh_tp">Tỉnh/Thành phố:</label>
              <select id="tinh_tp" name="tinh_tp">
                <option value="HANOI">Hà Nội</option>
                <option value="HOCHIMINH">Tp. Hồ Chí Minh</option>
                <option value="ANGIANG">An Giang</option>
                <option value="BACGIANG">Bắc Giang</option>
                <option value="BACKAN">Bắc Kạn</option>
                <option value="BACLIEU">Bạc Liêu</option>
                <option value="BACNINH">Bắc Ninh</option>
                <option value="BARIAVUNGTAU">Bà Rịa - Vũng Tàu</option>
                <option value="BENTRE">Bến Tre</option>
                <option value="BINHDINH">Bình Định</option>
                <option value="BINHDUONG">Bình Dương</option>
                <option value="BINHPHUOC">Bình Phước</option>
                <option value="BINHTHUAN">Bình Thuận</option>
                <option value="CAMAU">Cà Mau</option>
                <option value="CANTHO">Cần Thơ</option>
                <option value="CAOBANG">Cao Bằng</option>
                <option value="DAKLAK">Đắk Lắk</option>
                <option value="DAKNONG">Đắk Nông</option>
                <option value="DANANG">Đà Nẵng</option>
                <option value="DIENBIEN">Điện Biên</option>
                <option value="DONGNAI">Đồng Nai</option>
                <option value="DONGTHAP">Đồng Tháp</option>
                <option value="GIALAI">Gia Lai</option>
                <option value="HAGIANG">Hà Giang</option>
                <option value="HAIDUONG">Hải Dương</option>
                <option value="HAIPHONG">Hải Phòng</option>
                <option value="HANAM">Hà Nam</option>
                <option value="HATINH">Hà Tĩnh</option>
                <option value="HAUGIANG">Hậu Giang</option>
                <option value="HOABINH">Hòa Bình</option>
                <option value="HUNGYEN">Hưng Yên</option>
                <option value="KHANHHOA">Khánh Hòa</option>
                <option value="KIENGIANG">Kiên Giang</option>
                <option value="KONTUM">Kon Tum</option>
                <option value="LAICHAU">Lai Châu</option>
                <option value="LAMDONG">Lâm Đồng</option>
                <option value="LANGSON">Lạng Sơn</option>
                <option value="LAOCAI">Lào Cai</option>
                <option value="LONGAN">Long An</option>
                <option value="NAMDINH">Nam Định</option>
                <option value="NGHEAN">Nghệ An</option>
                <option value="NINHBINH">Ninh Bình</option>
                <option value="NINHTHUAN">Ninh Thuận</option>
                <option value="PHUTHO">Phú Thọ</option>
                <option value="PHUYEN">Phú Yên</option>
                <option value="QUANGBINH">Quảng Bình</option>
                <option value="QUANGNAM">Quảng Nam</option>
                <option value="QUANGNGAI">Quảng Ngãi</option>
                <option value="QUANGNINH">Quảng Ninh</option>
                <option value="QUANGTRI">Quảng Trị</option>
                <option value="SOCTRANG">Sóc Trăng</option>
                <option value="SONLA">Sơn La</option>
                <option value="TAYNINH">Tây Ninh</option>
                <option value="THAIBINH">Thái Bình</option>
                <option value="THAINGUYEN">Thái Nguyên</option>
                <option value="THANHHOA">Thanh Hóa</option>
                <option value="THUATHIENHUE">Thừa Thiên Huế</option>
                <option value="TIENGIANG">Tiền Giang</option>
                <option value="TRAVINH">Trà Vinh</option>
                <option value="TUYENQUANG">Tuyên Quang</option>
                <option value="VINHLONG">Vĩnh Long</option>
                <option value="VINHPHUC">Vĩnh Phúc</option>
                <option value="YENBAI">Yên Bái</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="quan_huyen">Quận/Huyện:</label>
              <input type="text" id="quan_huyen" name="quan_huyen" placeholder="Nhập quận/huyện của bạn">
            </div>

            <div class="col">
              <label for="xa_phuong">Xã/Phường/Thị trấn:</label>
              <input type="text" id="xa_phuong" name="xa_phuong" placeholder="Nhập xã/phường/thị trấn của bạn">
            </div>
          </div>

          <div class="row">
            <label for="dia_chi">Địa chỉ:</label>
            <input type="text" id="dia_chi" name="dia_chi" placeholder="Nhập địa chỉ của bạn" value='<?php echo $each['address'] ?>'>
          </div>

          <label>
            <input class="" type="checkbox"> <span>Giao hàng tới địa chỉkhác?</span>
          </label>

          <div class="row">
            <label for="ghi_chu">Ghi chú đơn hàng:</label>
            <textarea id="ghi_chu" name="ghi_chu" placeholder="Nhập ghi chú đơn hàng của bạn" style="width: 456px; height: 65px"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="large-5 col2">

            <div class="col-inner ">
              <div class="checkout-sidebar sm-touch-scroll">


                <h3 id="order_review_heading">Đơn hàng của bạn</h3>


                <div id="order_review" class="woocommerce-checkout-review-order">
                  <table class="shop_table woocommerce-checkout-review-order-table">
                    <thead>
                      <tr>
                        <th class="product-name">Sản phẩm</th>
                        <th class="product-total">Tạm tính</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $total = 0;
                      foreach ($cart as $id => $each) : ?>
                        <tr class="cart_item">
                          <td class="product-name">
                            <?php echo $each['name'] ?>&nbsp;
                            <strong class="product-quantity">×&nbsp;<?php echo $each['quantity'] ?></strong>
                          </td>
                          <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><bdi><?php echo $each['quantity'] * $each['price'] ?><span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                            <?php $total += ($each['quantity'] * $each['price']) ?>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tfoot>

                      <tr class="cart-subtotal">
                        <th>Tạm tính</th>
                        <td><span class="woocommerce-Price-amount amount"><bdi><?php echo $total ?><span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></td>
                      </tr>
                      <tr class="woocommerce-shipping-totals shipping ">
                        <td class="shipping__inner" colspan="2">
                          <table class="shipping__table ">
                            <tbody>
                              <tr>
                                <th>Giao hàng</th>
                                <td data-title="Giao hàng">
                                  <ul id="shipping_method" class="shipping__list woocommerce-shipping-methods">
                                    <li class="shipping__list_item">
                                      <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_ghtk_shipping_method_baophiship" value="ghtk_shipping_method_baophiship" class="shipping_method"><label class="shipping__list_label" for="shipping_method_0_ghtk_shipping_method_baophiship">Phí vận chuyển sẽ
                                        báo sau.</label>
                                    </li>
                                  </ul>


                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Tổng</th>
                        <td><strong><span class="woocommerce-Price-amount amount"><bdi><?php echo $total ?><span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong> </td>
                      </tr>


                    </tfoot>
                  </table>

                  <div id="payment" class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                      <li class="wc_payment_method payment_method_cod">
                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked">

                        <label class="payment_methods">
                          Trả tiền mặt khi nhận hàng </label>
                      </li>
                      <li class="wc_payment_method payment_method_bacs">
                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs">

                        <label class="payment_methods">
                          Chuyển khoản ngân hàng </label>
                        <div class="payment_box payment_method_bacs" style="display:none;">
                          <p>Thực hiện thanh toán vào tài khoản ngân hàng của AZGundam. Vui lòng sử dụng “Mã đơn
                            hàng” của bạn trong phần Nội dung thanh toán. Chúng tôi sẽ liên hệ với bạn để giao hàng.
                          </p>
                        </div>
                      </li>
                    </ul>
                    <div class="form-row place-order">
                      <div class="woocommerce-terms-and-conditions-wrapper">

                      </div>

                      <button class="button alt wp-element-button" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>

                      <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="3b8b63c51a"><input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                    </div>
                  </div>

                </div>

                <div class="woocommerce-privacy-policy-text">
                  <p>* HOTLINE Hỗ trợ đặt hàng: 070.779.1000<br>
                    ** Khách hàng ở Nội Thành TPHCM cần giao gấp vui lòng liên hệ HOTLINE</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </form>

    </div>
    <?php
    include 'footer.php';
    ?>

  </div>


  </div>
</body>

</html>