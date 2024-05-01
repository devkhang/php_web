
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css">
    <link rel="stylesheet" href="css/modify_layout.css">

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
                        <form id="genernal-info-input">
                            <textarea id="general-info-real=value" name="general-info-real=value">
                            
                                &#13;Torquemada&#13;Forimperium@gmail.com&#13;Tình trạng: Không thể bị khóa
                            </textarea>
                        </form>
                    </div>
                </div>
                <div class="user-info-box-element" id="detail-info">
                    <form id="detail-info-form">
                        <div id="Account">
                            Account
                        </div>
                        <div id="UserName-title">
                            Nick name
                        </div>
                        <div id="UserName" class="real-value">
                            <input id="UserName" name="UserName" type="text" value="The Omnissiah">
                        </div>
                        <div id="Email-title">
                            Email
                        </div>
                        <div id="Email" class="real-value">
                            <input id="Email" name="Email" type="text" value=" Forimperium@gmail.com">
                           
                        </div>
                        <div id="FullName-title">
                            Tên đầy đủ
                        </div>
                        <div id="FullName" class="real-value">
                            <input id="FullName" name="FullName" type="text" value="Torquemada">
                            
                        </div>
                        <div id="Role-title">
                            Chức vụ
                        </div>
                        <div id="Role" class="real-value">
                            <input id="Role" name="Role" type="text" value="Quản trị viên">
                           
                        </div>
                        <div id="Phone-title">
                            Số điện thoại
                        </div>
                        <div id="Phone" class="real-value">
                            <input id="Phone" name="Phone" type="text" value="0311108888">
                            
                        </div>
                    
                    </form>
                </div>
            </div>

            
        </div>
        <div id="right_panel">
            <div class="right_panel_element" id="Sumbit-all-button">
                <a onclick="SubmitAll(this)">SUBMIT</a>
            </div>
            
        </div>
    </div>

    <?php include_once("rightPannelRegion.php"); ?>

</div>
    <?php include_once("footerRegion.php"); ?>
   
    <script src="layout_skeketon_js.js"></script>
    <script src="modify_layout_js.js"></script>

</body>
</html>