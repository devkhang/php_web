<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="css/layout_style.css">

    <style>
        #Order-history{
            background-color: aliceblue;
        }
        #Order-history .history-box{
            background-color: rgba(238,238,238,255);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
            padding: 10px;
        }
        #Order-history .history-box:hover{
            background-color:rgba(29,162,216);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include_once('include/db.inc.php'); ?>
    <?php include_once("headerRegion.php");?>
    <div id="main_body">
    <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content"> 
            <?php 
                $MaHD = $_GET['id'];
                $query = "SELECT * FROM hoadon WHERE MaHD = $MaHD";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
            ?>
            <div id="Order-history">
                <div class="history-box">
                    <p>Ngày đặt hàng: <?php echo $row['ThoiGianDat']; ?></p>
                    <p>Tình trạng: <?php echo $row['TrangThaiXuLy'] == 0 ? 'Chưa xử lý': 'Đã xử lý'; ?></p>
                    <p>Tổng tiền: <?php echo number_format($row['Tongtien'], 0, ',', '.'); ?> Đ</p>
                    <p>Địa chỉ giao hàng: <?php echo $row['diachi']; ?></p>
                </div>
            </div>
            <h2>Danh sách sản phẩm trong đơn hàng</h2>
            <table border='1'>
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query_detail = "SELECT sp.MaSP, sp.Ten, ct.SoLuong, sp.Gia FROM chitietdonhang ct JOIN sanpham sp ON ct.MaSP = sp.MaSP WHERE ct.MaHD = $MaHD";
                        $result_detail = mysqli_query($conn, $query_detail);
                        while ($row_detail = mysqli_fetch_assoc($result_detail)) {
                            echo "<tr>";
                            echo "<td>" . $row_detail['MaSP'] . "</td>";
                            echo "<td>" . $row_detail['Ten'] . "</td>";
                            echo "<td>" . $row_detail['SoLuong'] . "</td>";
                            echo "<td>" . number_format($row_detail['Gia']*$row_detail['SoLuong'], 0, ',', '.') . " Đ</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            include_once("rightPannelRegion.php");
        ?>
    </div>
    <?php include_once("footerRegion.php");?>
</body>
</html>
