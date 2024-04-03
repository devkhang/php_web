
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css">
    <link rel="stylesheet" href="css/account_layout.css">

    <style>
        
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <div id="user-info_box">
                <div class="user-info-box-element" id="genernal-info">
                    <div id="avatar">
                        <img src="assets/emperor.jpeg">
                    </div>
                    <div id="basic-info">
                        <p id="p1">Torquemada</p>
                        <p id="p2">Forimperium@gmail.com</p>
                        <p id="p3">Tình trạng: Không thể bị khóa</p>
                    </div>
                </div>
                <div class="user-info-box-element" id="detail-info">
                    <div id="Account">
                        Account
                    </div>
                    <div id="UserName-title">
                        Nick name
                    </div>
                    <div id="UserName" class="real-value">
                        The Omnissiah
                    </div>
                    <div id="Email-title">
                        Email
                    </div>
                    <div id="Email" class="real-value">
                        Forimperium@gmail.com
                    </div>
                    <div id="FullName-title">
                        Tên đầy đủ
                    </div>
                    <div id="FullName" class="real-value">
                        Torquemada 
                    </div>
                    <div id="Role-title">
                        Chức vụ
                    </div>
                    <div id="Role" class="real-value">
                        Quản trị viên
                    </div>
                    <div id="Phone-title">
                        Số điện thoại
                    </div>
                    <div id="Phone" class="real-value">
                        0311108888
                    </div>
                </div>
            </div>

            
        </div>
        <div id="right_panel">
            <div class="right_panel_element" id="Lock">
                <a onclick="LockUser(this)">Khóa người dùng</a>
            </div>
            <div class="right_panel_element" id="Modify">
                <a href="Emperor_modify.html">Chỉnh sửa thông tin</a>
            </div>
            <div class="right_panel_element" id="UnLock">
                <a onclick="UnlockUser(this)" >Khóa người dùng</a>
            </div>
        </div>
    </div>
 
    <?php include_once("rightPannelRegion.php"); ?>

</div>
    <?php include_once("footerRegion.php"); ?>
    <script src="layout_skeketon_js.js"></script>
    <script src="user_accountJS.js"></script>

</body>
</html>