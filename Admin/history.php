<?php
    if(isset($_SESSION['id'])){
        session_start();
    }
    include_once('include\db.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/layout_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #Order-history{
            background-color: aliceblue;
        }
        #Order-history .history-box{
            background-color: rgba(238,238,238,255);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
        #Order-history .history-box:hover{
            background-color: rgba(29,162,216);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php");?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php");?>
        <div id="main_content">
            <?php
                if (isset($_GET["MaTK"]) && isset($_GET['startDate']) && isset($_GET['endDate'])) {
                    $query = "SELECT * FROM hoadon WHERE MaTK = " . $_GET["MaTK"] . " AND ThoiGianDat BETWEEN '" . $_GET['startDate'] . "' AND '" . $_GET['endDate'] . "'";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div id='Order-history'><div class='history-box' onclick=\"window.location.href = 'order_detail.php?id=" . $row['MaHD'] . "';\">";
                        echo "<p>ngày đặt hàng: " . $row["ThoiGianDat"] . "</p>";
                        echo "<p>tình trạng: " . ($row["TrangThaiXuLy"] == 0 ? "chưa xử lý" : "đã xử lý") . "</p>";
                        echo "<p>" . number_format($row['Tongtien'], 0, '.', ',')  . "Đ</p></div></div>";
                    }
                } else if (isset($_GET['MaTK'])) {
                    $query = "SELECT * FROM hoadon WHERE MaTK = " . $_GET["MaTK"];
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div id='Order-history'><div class='history-box' onclick=\"window.location.href = 'order_detail.php?id=" . $row['MaHD'] . "';\">";
                        echo "<p>ngày đặt hàng: " . $row["ThoiGianDat"] . "</p>";
                        echo "<p>tình trạng: " . ($row["TrangThaiXuLy"] == 0 ? "chưa xử lý" : "đã xử lý") . "</p>";
                        echo "<p>" . number_format($row['Tongtien'], 0, '.', ',') . "Đ</p></div></div>";
                    }
                }
            ?>
        </div>
        <?php include_once("rightPannelRegion.php");?>
    </div>
    <?php include_once("footerRegion.php");?>
</body>
</html>
