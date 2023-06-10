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
    <!-- <link rel="stylesheet" href="./assets/css/slick.css"> -->
    <!-- <link rel="stylesheet" href="./header.html"> -->

    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/container.css">
    <link rel="stylesheet" href="./assets/css/footer.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>GunDam.com</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    include 'menu.php';
    include 'products.php';
    include 'footer.php';
    ?>

    <script>
        $(document).ready(function() {
            $(".btn_add_to_cart").click(function() {
                let id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    url: "add_to_cart.php",
                    data: {
                        id
                    },
                    // dataType: "dataType",
                    success: function(data) {
                        alert("Thêm sản phẩm " + id + " thành công!");
                    }
                });
            });

        });
    </script>

</body>

</html>