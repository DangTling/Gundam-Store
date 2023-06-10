<?php
require '../connect.php';
require '../features_of_admin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <title>Thống Kê</title>
</head>
<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<body>
    <!-- <div class="child">
        <h3>Số Đơn theo mốc thời gian</h3>
        <form action="process_count.php" method="POST">
            Chọn mốc thời gian
            <input type="date" name="date" value="<?php echo date('Y-m-d') ?>">
            <button>OK</button>
        </form>
        <p>
            <?php
            if (isset($_GET['result'])) {
                echo $_GET['result'];
            } else {
                echo null;
            }
            ?>
        </p>
    </div>
    <div class="child">
        <h3>Sản phẩm bán chạy</h3>
        <p>
            <?php
            $sql = "select product.id, product.name, ifnull(sum(quantity),0) as quantity_sales 
                        from product 
                        left join order_detail on product.id = order_detail.product_id
                        left join orders on orders.id = order_detail.order_id
                        where status = 1 or orders.id = null
                        group by product_id 
                        order by quantity_sales desc, product.id asc";

            // Cách truy vấn thứ 2 là dùng subquery:
            $sql = "select product.id, product.name,
                        (
                            select ifnull(sum(quantity),0)
                            from order_detail
                            join orders on orders.id = order_detail.order_id
                            where order_detail.product_id = product.id
                            and orders.status = 1
                        ) as quantity_sales
                        from product 
                        order by quantity_sales desc, product.id asc";
            $result = mysqli_query($connect, $sql);
            ?>
            <table border="1">
                <tr>
                    <td>Mã Sản Phẩm</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Số lượng đã bán</td>
                </tr>
                <?php foreach ($result as $each) : ?>
                    <tr>
                        <td><?php echo $each['id'] ?></td>
                        <td><?php echo $each['name'] ?></td>
                        <td><?php echo $each['quantity_sales'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </p>
    </div>
    <div class="child">
        <h3>Doanh thu tính đến thời điểm hiện tại</h3>
        <form action="process_total_price.php" method="POST">
            Chọn mốc thời gian
            <input type="date" name="date" value="<?php echo date('Y-m-d') ?>">
            <button>OK</button>
        </form>
        <p>
            <?php
            if (isset($_GET['total'])) {
                echo $_GET['total'];
            } else {
                echo null;
            }
            ?>
        </p>
    </div>
    <div class="child">
        <h3>Khách hàng tiềm năng</h3>
        <p>
            <?php
            $sql = "select name, sum(total_price) as total_paid, count(orders.customer_id)
                    from customer
                    left join orders on orders.customer_id = customer.id
                    where orders.status = 1 or orders.customer_id is null 
                    group by customer.id
                    order by total_paid desc";
            $result = mysqli_query($connect, $sql);
            ?>
            <table border="1">
                <tr>
                    <td>Tên khách hàng</td>
                    <td>Tổng tiền đã thanh toán</td>
                    <td>Số lượng đã mua</td>
                </tr>
                <?php foreach ($result as $each) : ?>
                    <tr>
                        <td><?php echo $each['name'] ?></td>
                        <td><?php echo $each['total_paid'] ?></td>
                        <td><?php echo $each['count(orders.customer_id)'] ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </p>
    </div> -->

    <figure class="highcharts-figure">
        <div id="container"></div>

    </figure>
    <script>
        $.ajax({
            type: "post",
            url: "statistic_renevue.php",
            data: {
                $
            },
            // dataType: "dataType",
            success: function(response) {

            }
        });
        Highcharts.chart('container', {

            title: {
                text: 'Doanh thu theo tháng',
                align: 'center'
            },

            subtitle: {
                text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>',
                align: 'left'
            },

            yAxis: {
                title: {
                    text: 'Tổng Tiền'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2010 to 2020'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Doanh Thu',
                data: $arrY
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
</body>

</html>