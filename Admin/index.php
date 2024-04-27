<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Thêm Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout_style.css">
    <style>
        /* Bạn có thể thêm style tùy chỉnh của mình ở đây */
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <!-- Bắt đầu card -->
            <?php if(isset($_SESSION['admin_name'])){?>
            <div class="card">
                <div class="card-header text-center h2">
                    Thông tin về admin
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title"><img src="assets/<?php echo $_SESSION['HinhDaiDien']; ?>" alt="picture" class="img-fluid"></h5>
                    <h3 class="card-text">mã tài khoản :<?php echo $_SESSION["id"] ?><br>
                    tên admin: <?php echo $_SESSION["admin_name"] ?></h3>
                </div>
            </div>
            <?php } ?>
            <!-- Kết thúc card -->
        </div>

        <?php include_once("rightPannelRegion.php"); ?>
    </div>

    <?php include_once("footerRegion.php"); ?>

    <!-- Thêm Bootstrap JS và các dependency (Popper.js và jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.8.7/umd.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="layout_skeleton_js.js"></script>
</body>
</html>